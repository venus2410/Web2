<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/21880020.css">
</head>
<body>
  <div class="container-fluid p-2 mh-100" id="container">
    <div class="row m-2" id="row">
      <div class="sidebar" id="left">
        <ul><a href="index.php">Trang chủ</a></ul>
        <ul><a href="21880020_Bai01/index.php">Bài 01</a></ul>
        <ul><a href="21880020_Bai02/index.php">Bài 02</a></ul>
        <ul><a href="21880020_Bai03/index.php">Bài 03</a></ul>
        <ul><a href="21880020_Bai04/index.php">Bài 04</a></ul>
        <ul><a href="21880020_Bai05/index.php">Bài 05</a></ul>
        <ul><a href="21880020_Bai06/index.php">Bài 06</a></ul>
        <ul><a href="21880020_Bai07/index.php">Bài 07</a></ul>
        <ul><a href="21880020_Bai07b/index.php">Bài 07b</a></ul>
        <ul><a href="21880020_Bai08/index.php">Bài 08</a></ul>
        <ul><a href="21880020_Bai09/index.php">Bài 09</a></ul>
        <ul><a href="21880020_Bai09a/index.php">Bài 09a</a></ul>
        <ul><a href="21880020_Bai10/index.php">Bài 10</a></ul>
        <ul><a href="21880020_Bai10a/index.php">Bài 10a</a></ul>
        <ul><a href="21880020_Bai11/index.php">Bài 11</a></ul>
        <ul><a href="21880020_Bai11a/index.php">Bài 11a</a></ul>
        <ul><a href="21880020_Bai12/index.php">Bài 12</a></ul>
        <ul><a href="21880020_Bai12a/index.php">Bài 12a</a></ul>
        <ul><a href="21880020_Bai13/index.php">Bài 13</a></ul>
      </div>
      <div class="col-8 content" id="right" >
        <div class="" id="above">
            <div class="" id="avatar" style="float:right;height: 300px;width:300px;">
              <img src="images/avatar.jpg" alt="" class="">
            </div>
            <p>
              <?php
                echo  "". date("d/m/Y") . "<br>";
              ?>
            </p>
            <p>
              MSSV: 21880020<br>
              Họ và tên: Nguyễn Công Danh<br>
              Email: nguyencongdanh2410@gmail.com<br>
              FB: <a href="https://www.facebook.com/danh2410/" target="_blank">https://www.facebook.com/danh2410/</a>
            </p>
        </div>
        <div class="footer" id="footer">
            <p>&copy <?php echo date("Y")?> 21880020 - Nguyễn Công Danh - nguyencongdanh2410@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>