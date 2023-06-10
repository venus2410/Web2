<?php
  $p='trangchu';
  $g_topc='';
  $g_bottomc='';

  if(isset($_GET['p']))
    $p=$_GET['p'];

  switch ($p) {
    case 'gioithieu':
      include 'datatemplate/datagioithieu.php';
      break;
    case 'hinhanh':
      include 'datatemplate/datahinhanh.php';
      break;
    default:
      include 'datatemplate/datatrangchu.php';
      break;
  }  
  include 'giaodien1.php';
?>