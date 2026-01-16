<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*if(mysqli_connect(hostname:"localhost", username:"root",password:"")){
    echo 'connected';
}; */


 
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "root";
$db["db_name"] = "ecuase";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$connection){
        die("Databases connection failed");
    }else{
        echo 'DB connected';
    };

