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
            <?php 
              include '../template/21880020_vungB.php';
            ?>
            <h2>
                Bài 11a:
                
            </h2>
            <p>
              MSSV: 21880020<br>
              Họ tên: Nguyễn Công Danh<br>
              Email: nguyencongdanh2410@gmail.com
            </p>
            <p>Các yêu cầu đã hoàn thành: 1, 2, 3, 4</p>
            <div>
              <p>Yêu cầu 1:</p>
              <img src="./images/yc1_1.png">
              <img src="./images/yc1_2.png">
              <img src="./images/yc1_3.png">
            </div>
            <div>
              <p><br>Yêu cầu 2:</p>
              <img src="./images/yc2_1.png">
              <img src="./images/yc2_2.png">
              <img src="./images/yc2_3.png">
              <img src="./images/yc2_4.png">
              <img src="./images/yc2_5.png">
            </div>
            <div>
              <p><br>Yêu cầu 3:</p>
              <img src="./images/yc3_1.png">
              <img src="./images/yc3_2.png">
              <img src="./images/yc3_3.png">
              <img src="./images/yc3_4.png">
            </div>
            <div>
              <p><br>Yêu cầu 4:</p>
              <img src="./images/yc4_1.png">
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