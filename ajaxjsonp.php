<?php  
    $data = array(  
        "name"=>$_GET['name'],  
        "age"=>$_GET["age"],  
    );
    // echo $data[0];
    echo $_GET['callback']."(".json_encode($data).")"; //相当于：echo 'back({"name":"$_GET["name"]","age":$_["age"]})';// 必须加前缀哦,是从客户端传过来的方法名  
?>  