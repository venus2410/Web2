<?php
    $folder = '../products';
    $images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $tensp=array("Bình đựng nước","Điện thoại","Đồng hồ","Máy ảnh","Pepsi","Tai nghe");
    $giaban=array("125,000","15,000,000","3,500,000","9,000,000","9,000","1,500,000");
    $DSSP=[
    ["tensp"=>"Điện thoại","gia"=>15000000,"hinhanh"=>"./products/dienthoai.jpg"],
    ["tensp"=>"Đồng hồ","gia"=>3500000,"hinhanh"=>"./products/dongho.jpg"],
    ["tensp"=>"Máy ảnh","gia"=>9000000,"hinhanh"=>"./products/mayanh.jpg"],    
    ["tensp"=>"Tai nghe","gia"=>1500000,"hinhanh"=>"./products/tainghe.jpg"]
            ];
    
    $data='';

    foreach($DSSP as $sp){
        $data=$data.'<div class="col-4 col-6-medium col-12-small">
        <section class="box">
            <div class="images"><a href="#" class="image featured"><img src="'.$sp["hinhanh"].'" alt="" /></a></div>
            <header>
                <h3>'.number_format($sp["gia"], 0, '.', ',').' đ</h3>
            </header>
            <p style="font-weight: bolder; color:black;">'.$sp["tensp"].'</p>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button alt">Find out more</a></li>
                </ul>
            </footer>
        </section>
        </div>';
    }
?>