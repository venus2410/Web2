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

          <h1 class="text-center">
            Kết quả môn học WEB2
          </h1>         
          <div>
            
                <?php 
                  $db_name="epiz_33246456_QLDangKy_21880020";
                  $db_server="sql100.epizy.com";
                  $db_loginname="epiz_33246456";
                  $db_password="pBp99kSpZOmiKn";

                  $ketnoi= mysqli_connect($db_server,$db_loginname,$db_password,$db_name);

                  if(!$ketnoi){
                    die ("kết nối không thành công!");
                  }
                  mysqli_query($ketnoi,"SET NAMES utf8");

                  $sqldau='SELECT sinhvien.MSSV,sinhvien.TenSV,sinhvien.DTB, dkhoc.Diem FROM dkhoc LEFT JOIN sinhvien on dkhoc.MaSV=sinhvien.MSSV where dkhoc.MaMH="WEB2" AND dkhoc.Diem>=5;';
                  $sqlrot='SELECT sinhvien.MSSV,sinhvien.TenSV,sinhvien.DTB, dkhoc.Diem FROM dkhoc LEFT JOIN sinhvien on dkhoc.MaSV=sinhvien.MSSV where dkhoc.MaMH="WEB2" AND dkhoc.Diem<5;';

                  $dataKQdau=mysqli_query($ketnoi,$sqldau);
                  $dataKQrot=mysqli_query($ketnoi,$sqlrot);
                  
                  #avatar
                  $arAvatar=array("./avatar/avatar3.jpg","./avatar/avatar4.jpg","./avatar/avatar5.jpg","./avatar/avatar6.jpg");
                  #$DSSV_21880020[$i]['Avatar']=$arAvatar[array_rand($arAvatar)];

                  #DS SV DAU
                  echo'
                  <table class="table table-hover m-5">
                    <thead>
                    <tr class="bg-primary">
                            <th align="center" colspan="6">Danh sách sinh viên đậu</th>
                        </tr>    
                    <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">MSSV</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Điểm trung bình</th>
                            <th scope="col">Điểm môn học</th>
                        </tr>
                        
                    </thead>
                    <tbody>';

                  if(mysqli_num_rows($dataKQdau)>0) {
                    $stt=1;
                    while($dataRow=mysqli_fetch_assoc($dataKQdau)){
                      $mssv=$dataRow["MSSV"];
                      $tensv=$dataRow["TenSV"];
                      $hinh=$arAvatar[array_rand($arAvatar)];
                      $dtb=$dataRow["DTB"];
                      $diem=$dataRow["Diem"];
                      echo"
                        <tr>
                          <th>$stt</th>
                          <td>$mssv</td>
                          <td>$tensv</td>
                          <td><img style=\"height:50px;\" src=".$hinh." alt=\"\"></td>
                          <td>$dtb</td>
                          <td>$diem</td>
                        </tr>
                      ";
                      $stt++;
                    }
                  }
                  else {
                    echo "không có dữ liệu trả về";
                  }
                  echo'</tbody>
                    </table>';

                 #DS SV ROT
                 echo'
                  <table class="table table-hover m-5">
                    <thead>
                    <tr class="bg-primary">
                            <th align="center" colspan="6">Danh sách sinh viên rớt</th>
                        </tr>    
                    <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">MSSV</th>
                            <th scope="col">Tên sinh viên</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Điểm trung bình</th>
                            <th scope="col">Điểm môn học</th>
                        </tr>
                        
                    </thead>
                    <tbody>';

                  if(mysqli_num_rows($dataKQrot)>0) {
                    $stt=1;
                    while($dataRow=mysqli_fetch_assoc($dataKQrot)){
                      $mssv=$dataRow["MSSV"];
                      $tensv=$dataRow["TenSV"];
                      $dtb=$dataRow["DTB"];
                      $diem=$dataRow["Diem"];
                      $hinh=$arAvatar[array_rand($arAvatar)];
                      echo"
                        <tr>
                          <th>$stt</th>
                          <td>$mssv</td>
                          <td>$tensv</td>
                          <td><img style=\"height:50px;\" src=".$hinh." alt=\"\"></td>
                          <td>$dtb</td>
                          <td>$diem</td>
                        </tr>
                      ";
                      $stt++;
                    }
                  }
                  else {
                    echo "không có dữ liệu trả về";
                  }
                  echo '</tbody>
                    </table>';   

                  mysqli_close($ketnoi);
                ?> 
          </div>
        </div>
        <?php
        include '../template/21880020_vungD.php';
        ?>
      </div>
    </div>
  </div>
</body>

</html>