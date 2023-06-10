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

          <h1>
            Bài 12a<br>
          </h1>

          <div class="d-flex justify-content-between align-items-stretch">
            <div style="font-size: large;">
              Họ và tên: Nguyễn Công Danh<br>
              MSSV: 21880020<br>
              Thời gian làm bài: 02/04/2023<br>
              Email: nguyencongdanh2410@gmail.com<br>
              Facebook:<a href="fb.com/danh2410">fb.com/danh2410</a>
            </div>
            <div class="" id="avatar" style="width:20%;">
              <img src="../images/avatar.jpg" alt="" class="">
            </div>
          </div>
          <div>
            <table class="table table-hover m-5">
              <thead>
                <tr>
                  <th scope="col">Số thứ tự</th>
                  <th scope="col">Tên môn học</th>
                  <th scope="col">Số lượng sinh viên đậu</th>
                  <th scope="col">Số lượng sinh viên rớt</th>
                  <th scope="col">Xem danh sách</th>
                </tr>
              </thead>
              <tbody>
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

                  $sql="SELECT TenMon, COUNT(CASE when Diem>=5 then 1 ELSE null end) as svdau, COUNT(CASE when Diem<5 then 1 ELSE null end) as svrot, MaMonHoc FROM sinhvien sv LEFT JOIN dkhoc dk on MSSV=MaSV LEFT JOIN monhoc on MaMonHoc=MaMH GROUP BY TenMon, MaMonHoc ORDER BY MaMH;";

                  $dataKQ=mysqli_query($ketnoi,$sql);

                  if(mysqli_num_rows($dataKQ)>0) {
                    $stt=1;
                    while($dataRow=mysqli_fetch_assoc($dataKQ)){
                      $tenmon=$dataRow["TenMon"];
                      $svdau=$dataRow["svdau"];
                      $svrot=$dataRow["svrot"];
                      $mamh=$dataRow["MaMonHoc"];
                      echo"
                        <tr>
                          <th>$stt</th>
                          <td>$tenmon</td>
                          <td>$svdau</td>
                          <td>$svrot</td>
                          <td><a class=\"text-light\" href=\"DSSV_21880020_Mon".$mamh.".php\">Link</a></td>
                        </tr>
                      ";
                      $stt++;
                    }
                  }
                  else {
                    echo "không có dữ liệu trả về";
                  }

                  mysqli_close($ketnoi);
                ?>

              </tbody>
            </table>
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