<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/21880020.css">
</head>

<body>
  <div class="container-fluid p-2 mh-100" id="container">
    <div class="row m-2" id="row">
      <?php
      include '../template/21880020_vungC.php';
      ?>
      <div class="col-8" id="right">
        <div class="m-5" id="above">
          <?php
          include '../template/21880020_vungB.php';
          ?>
          <p>
            Các tập tin đã gửi:
          </p>
          <?php

	          $cactaptin=$_FILES;
	          $taptin=$cactaptin['taptin'];
	          #var_dump($taptin);
	          #$test=mime_content_type($taptin['name']);
	          #var_dump($test);
	          if ($taptin['error']!=0) {
	          	echo 'có lỗi trong quá trình gửi file';
	          }
	          else
	          {
		          	$duongdandich='';
		          	$tentaptin=$taptin['name'];
		          	
		          	$amthanh='Upload/AmThanh';
		          	$hinhanh='Upload/HinhAnh';
		          	$tailieu='Upload/TaiLieu';
		          	$taptinnen='Upload/TapTinNen';
		          	$video='Upload/Video';

		          	$loaitaptin=array(
		          		array('duongdan'=>$amthanh,'duoi'=>array('wav','mp3')),
		          		array('duongdan'=>$hinhanh,'duoi'=>array('gif','jpg','png','bmp')),
		          		array('duongdan'=>$tailieu,'duoi'=>array('docx','pdf','xlsx','pptx')),
		          		array('duongdan'=>$taptinnen,'duoi'=>array('zip','7z','rar')),
		          		array('duongdan'=>$video,'duoi'=>array('mp4'))
		          	);


		          	$duoitaptin=pathinfo($taptin['name'], PATHINFO_EXTENSION);
		          	#var_dump($duoitaptin);
		          	if(strpos($taptin['type'],'video'))
		          	{
		          		$duongdandich=$hinhanh;
		          	}
		          	elseif(strpos($taptin['type'],'audio'))
		          	{
		          		$duongdandich=$amthanh;
		          	}
		          	elseif(strpos($taptin['type'],'image'))
		          	{
		          		$duongdandich=$hinhanh;
		          	}
		          	else{
		          		foreach($loaitaptin as $loai){
		          		if (in_array($duoitaptin, $loai['duoi'])) {
		          			$duongdandich=$loai['duongdan'];
		          		}
		          	}
	          	}
	          	
	          	#var_dump($duongdandich);

	          	if ($duongdandich!='') {
	          		move_uploaded_file($taptin['tmp_name'], "$duongdandich/$tentaptin");

	          		#ghivao taptin.txt
	          		$myfile = fopen("$duongdandich/thongtin.txt", "a") or die("Unable to open file!");
					$txt = "$tentaptin\n";
					fwrite($myfile, $txt);
					fclose($myfile);

					#lietke
					$array = explode("\n", file_get_contents("$duongdandich/thongtin.txt"));
					if ($duongdandich=='Upload/HinhAnh') {
						foreach($array as $ar){
							echo "<ul><img src=\"$duongdandich/$ar\" alt=\"\"></ul>";
						}
					}
					elseif ($duongdandich=='Upload/Video') {
						foreach($array as $ar){
							if ($ar!='') {
								echo '<ul>
											<p>'.$ar.'</p>
											<video width="320" height="240" controls>
										  <source src="'.$duongdandich.'/'.$ar.'" type="video/mp4">
										  <source src="movie.ogg" type="video/ogg">
										  Your browser does not support the video tag.
									</video></ul>';
							}
						}
					}
					elseif ($duongdandich=='Upload/AmThanh') {
						foreach($array as $ar){
							if ($ar!='') {
								echo '<ul>
										<p>'.$ar.'</p>
										<audio width="320" height="240" controls>
									  <source src="'.$duongdandich.'/'.$ar.'" type="audio/mpeg">
									  <source src="movie.ogg" type="audio/ogg">
									  Your browser does not support the video tag.
									</audio></ul>';
							}
						}
					}
					else
					{
						foreach($array as $ar){
							echo "<ul><a href=\"$duongdandich/$ar\" download>$ar</a></ul>";
						}
					}	
	          	}
	          	else{
	          		echo "không thuộc loại file được nộp!";
	          	}
	          }
	          #var_dump($taptin);

          ?>
        </div>
        <?php
        include '../template/21880020_vungD.php';
        ?>
      </div>
    </div>
  </div>
</body>

</html>