<?php
header("Access-Control-Allow-Origin:*");
    $name = $_GET["name"];
    // echo $name;
    $str = "hello ajaxget";
    $html = "<p>those prograph was transfrom ajax.php files!</p>"; 
    echo $html,$name;

?>