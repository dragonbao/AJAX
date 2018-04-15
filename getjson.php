<?php
	$data = array(  
        "name"=>$_GET['name'],  
        "age"=>$_GET["age"],  
	);
    echo $_GET['jsoncallback']."(".json_encode($data).")";
?>