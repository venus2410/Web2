<?php
    $tenmonhoc=array("Hệ thống máy tính",
    "Công nghệ thông tin",
    "Lập trình phần mềm",
    "Quy trình phát triển phần mềm",
    "Phát triển ứng dụng Web",
    "Đồ họa máy tính",
    "Nhập môn lập trình",
    "Xử lý tín hiệu số",
    "Hệ quản trị CSDL",
    "Quản trị dự án phần mềm",
    "Lý thuyết Hệ điều hành",
    "Phát triển ứng dụng trên nền web",
    "Linux và phần mềm mã nguồn mở",
    "Quản trị mạng máy tính",
    "Hệ thống nhúng",
    "Ngôn ngữ lập trình tiên tiến (Java)",
    "An ninh mạng",
    "Xử lý ảnh",
    "Nguyên lý hệ điều hành",
    "Cơ sở dữ liệu",
    "Cấu trúc dữ liệu & Giải thuật",
    "Kiến trúc máy tính"
    );

    $bangdiem=array();

    for($i=0;$i<count($tenmonhoc);$i++)
    {
        $bangdiem[$i]['tenmon']=$tenmonhoc[array_rand($tenmonhoc)];
        $bangdiem[$i]['diem']=rand(10,100)/10;
    }
    $data='<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên môn học</th>
                <th>Điểm</th>
            </tr>
        </thead>
        <tbody>';
    $stt=1;
    foreach($bangdiem as $diem){
        $data=$data."<tr>
        <td>$stt</td>
        <td>".$diem['tenmon']."</td>
        <td>".$diem['diem']."</td>
        </tr>";
        $stt++;
    }

    $data=$data.'</tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
                </div>';
?>