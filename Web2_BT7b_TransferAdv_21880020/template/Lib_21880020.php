<?php 
    function TaoDSSV(&$DSSV_21880020){
        $arHo=array("Nguyễn","Trần","Lê","Phùng");
        $arTenLot1=array("Võ","Khánh","Gia","","");
        $arTenLot2=array("Bảo","Hoàng","Mạnh","Thái","","");
        $arTen=array("Lâm","Khang","Dương","Anh");
        $arAvatar=array("./avatar/avatar1.png","./avatar/avatar2.png","./avatar/avatar3.jpg","./avatar/avatar4.jpg","./avatar/avatar5.jpg","./avatar/avatar6.jpg");

        $numOfStudent=rand(20,100);
        for($i=0;$i<$numOfStudent;$i++){
            $DSSV_21880020[$i]['MSSV']=25880000+$i+1;
            $DSSV_21880020[$i]['HoTen']=$arHo[array_rand($arHo)]." ".$arTenLot1[array_rand($arTenLot1)]." ".$arTenLot2[array_rand($arTenLot2)]." ".$arTen[array_rand($arTen)];
            $DSSV_21880020[$i]['Diem']=rand(0,100)/10;
            $DSSV_21880020[$i]['Avatar']=$arAvatar[array_rand($arAvatar)];
        }
    }
    function DS_ChuaTotNghiep($dssv){
        foreach ($dssv as $sv) {
            if ($sv['Diem'] < 5) {
              echo 
              '<tr>
                <td>'.$sv['MSSV'].'</td>
                <td>'.$sv['HoTen'].'</td>
                <td>'.$sv['Diem'].'</td>
                <td><img style="height:50px;" src="'.$sv['Avatar'].'" alt=""></td>
              </tr>';
            }
        }
    }
    function DS_TotNghiep($dssv){
        foreach ($dssv as $sv) {
            if ($sv['Diem'] >= 5) {
              echo 
              '<tr>
                <td>'.$sv['MSSV'].'</td>
                <td>'.$sv['HoTen'].'</td>
                <td>'.$sv['Diem'].'</td>
                <td><img style="height:50px;" src="'.$sv['Avatar'].'" alt=""></td>
              </tr>';
            }
        }
    }
?>