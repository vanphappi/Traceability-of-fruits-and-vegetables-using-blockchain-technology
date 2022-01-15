<style>
    table {
        max-width: 700px;
    }
</style>
<?php
    $tensanpham=$_POST["tensanpham"];
    $ngaytao=$_POST["ngaytao"];
    $diachi=$_POST["diachi"];
    $motasanpham=$_POST["motasanpham"];
    echo "<div class='card' style='box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%); with: 90%;'>
    <table style='margin: 30px; '>
    <tr>
    <td><b>Tên sản phẩm: </b></td> 
    <td>$tensanpham</td>   
    </tr>
    <tr>
    <td><b>Ngày tạo thông tin sản phẩm: </b></td> 
    <td>$ngaytao</td>   
    </tr>
    <tr>
    <td><b>Mô tả sản phẩm: </b></td> 
    <td>$motasanpham</td>   
    </tr>
    <tr>
    <td><b>Địa chỉ nhà phân phối: </b></td> 
    <td>$diachi</td>   
    </tr>
    </table></div>";
?>