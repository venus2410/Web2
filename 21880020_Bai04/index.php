<?php 
  session_start();
?>
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
          <?php
            require_once './Data4_21880020.php';
            require_once '../template/Lib_21880020.php';
            TaoDSSV($DSSV_21880020);
            $_SESSION['DS']=$DSSV_21880020;
          ?>
          <p>
            <?php
            print "Bài 04<br>Kết quả:";
            ?>
          </p>
          <div>
            Tổng số sinh viên: <?php echo count($DSSV_21880020) ?>
          </div>
          <div>
            <a href="./ds_svtotnghiep_21880020.php">
              Số lượng sinh viên tốt nghiệp: <?php
                                              $counter = 0;
                                              foreach ($DSSV_21880020 as $sv) {
                                                if ($sv['Diem'] >= 5) $counter++;
                                              }
                                              echo $counter;
                                              ?>
            </a>
          </div>
          <div>
            <a href="./ds_svchuatotnghiep_21880020.php">
              Số lượng sinh viên chưa tốt nghiệp: <?php
                                                  $counter = 0;
                                                  foreach ($DSSV_21880020 as $sv) {
                                                    if ($sv['Diem'] < 5) $counter++;
                                                  }
                                                  echo $counter;
                                                  ?>
            </a>
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