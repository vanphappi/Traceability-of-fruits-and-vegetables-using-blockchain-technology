<?php
    $noisanxuat=$_POST["noisanxuat"];
    $ngaygieotrong=$_POST["ngaygieotrong"];
    $ngaythuhoach=$_POST["ngaythuhoach"];
    $cacloaithuocsudung=$_POST["cacloaithuocsudung"];
    echo "<div class='card' style='box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%); with: 90%;'>
    <table style='margin: 30px; '>
    <tr>
    <td><b>Nơi trồng: </b></td> 
    <td>$noisanxuat</td>   
    </tr>
    <tr>
    <td><b>Ngày tạo gieo trồng: </b></td> 
    <td>$ngaygieotrong</td>   
    </tr>
    <tr>
    <td><b>Ngày thu hoạch: </b></td> 
    <td>$ngaythuhoach</td>   
    </tr>
    <tr>
    <td><b>Các loại thuốc sử dụng: </b></td> 
    <td>$cacloaithuocsudung</td>   
    </tr>
    </table></div>";
?>