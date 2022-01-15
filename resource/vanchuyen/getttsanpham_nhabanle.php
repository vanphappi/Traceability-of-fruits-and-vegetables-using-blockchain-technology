<?php
    $diachi=$_POST["diachi"];
    $ngaynhap=$_POST["ngaynhap"];
    $cachbaoquan=$_POST["cachbaoquan"];
    echo "<div class='card' style='box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%); with: 90%;'>
    <table style='margin: 30px; '>
    <tr>
    <td><b>Địa chỉ nhà bán lẻ: </b></td> 
    <td>$diachi</td>   
    </tr>
    <tr>
    <td><b>Ngày nhập sản phẩm vào cửa hàng: </b></td> 
    <td>$ngaynhap</td>   
    </tr>
    <tr>
    <td><b>Cách bảo quản sản phẩm: </b></td> 
    <td>$cachbaoquan</td>   
    </tr>
    </table></div>";
?>