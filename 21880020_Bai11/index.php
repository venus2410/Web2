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
            <p>
              <?php
                print "Bài 11<br>Kết quả:";
              ?>
            </p>
        </div>
        <?php 
        include '../template/21880020_vungD.php';
        ?>
      </div>
    </div>
  </div>
</body>
</html>