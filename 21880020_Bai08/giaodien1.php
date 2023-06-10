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
        <div class="m-5 text-center" id="above">
            <?php 
              include '../template/21880020_vungB.php';
            ?>
            <p>
              <?php
                print "Bài 08<br>Kết quả:";
              ?>
            </p>
            <div class="m-10" style="margin-bottom: 50px;">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?p=trangchu">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?p=gioithieu">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?p=hinhanh">Hình ảnh</a>
                    </li>
                  </ul>
            </div>
            <!--g_topc-->
            <div class="m-10">
              <?php
                echo $g_topc
              ?>              
            </div>
            <!--g_bottomc-->
            <div class="m-10">
              <?php
                echo $g_bottomc
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