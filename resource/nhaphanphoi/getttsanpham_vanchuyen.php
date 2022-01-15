<?php
    $noidi=$_POST["noidi"];
    $noiden=$_POST["noiden"];
    echo "<div class='card' style='box-shadow: 0 0 2rem 0 rgb(136 152 170 / 50%); with: 90%;'>
    <table style='margin: 30px; '>
    <tr>
    <td><b>Nơi sản phẩm được vận chuyển đi: </b></td> 
    <td>$noidi</td>   
    </tr>
    <tr>
    <td><b>Nơi nhận sản phẩm được chuyển tới: </b></td> 
    <td>$noiden</td>   
    </tr>
    </table></div>";
?>