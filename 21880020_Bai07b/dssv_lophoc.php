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
      <div class="col-8 content" id="right">
        <div class="" id="above">
        	<a href="./index.php">Quay lại</a>
            <?php 
              include '../template/21880020_vungB.php';
              require_once './data.php';
            ?>
            <!--xu ly du lieu-->
            <?php
            	$tenlop="";

            	if (isset($_GET['tenlop'])) {
            		$tenlop=$_GET['tenlop'];
            		echo "<p>Danh sách lớp $tenlop</p>";
            		echo '<table class="table table-striped table-bordered table-hover align-middle" id="students">
				            <tr>
				              <th>MSSV</th>
				              <th>Họ tên</th>
				              <th>Điểm trung bình</th>
				              <th>Avatar</th>
				            </tr>';
				    foreach ($arrDSSV as $sv) {
			            if ($sv['Lop'] == $tenlop) {
			              echo 
			              '<tr>
			                <td>'.$sv['MSSV'].'</td>
			                <td>'.$sv['HoTen'].'</td>
			                <td>'.$sv['DTB'].'</td>
			                <td><img style="height:50px;" src="'.$sv['URL'].'" alt=""></td>
	             			 </tr>';
	            			}
        			}
				    echo "</table>";
            	}
            	else
            	{
            		echo "Tên lớp không tồn ";
            	}
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