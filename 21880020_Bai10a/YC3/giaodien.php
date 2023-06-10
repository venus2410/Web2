<?php
    $content="";
    $a_home="";
    $a_products="";

    $p="";
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }

    switch($p){
        case 'products':
            include ('./data/product.php');
            $content=$data;
            $a_products="current";
            break;

        default:
            include ('./data/home.php');
            $content=$data;
            $a_home="current";
            break;
    };
    include('index.php');
?>