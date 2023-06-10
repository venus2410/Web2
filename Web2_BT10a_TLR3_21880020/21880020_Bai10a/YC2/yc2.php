<?php
    $content="111";
    $p="";
    $actHome="";
    $actMygrade="";
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }

    switch($p){
        case 'mygrade':
            $actMygrade="active";
            include('./data/mygrade.php');
            $content=$data;
            break;
        default:
            $actHome="active";
            $content="<h2>Họ và tên: Nguyễn Công Danh<br>
            MSSV: 21880020<br>
            Email: nguyencongdanh2410@gmail.com<br>
            Kĩ thuật sử dụng: TLR3 </h2>";
        }
        
    $pagecontent=file_get_contents("index.html");
    $pagecontent=str_replace("{{CONTENT}}",$content,$pagecontent);
    $pagecontent=str_replace("{{ACTIVEHOME}}",$actHome,$pagecontent);
    $pagecontent=str_replace("{{ACTIVEMYGRADE}}",$actMygrade,$pagecontent);
    print($pagecontent);

?>