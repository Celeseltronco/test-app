<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "root";
$db["db_name"] = "login_app";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conn){
        die("Databases connection failed");
    };


/*
$host = "localhost";
$username = "root";
$password = "";
$database = "login_app";

$conn = mysqli_connect($host, $username ,$password, $database);

if(!$conn){

    die("Connection failed" . mysqli_connect_error());

} else {
//       echo "Connected";
}
*/

function check_query($result){
    global $conn;
    if(!$result){
        return "Error" . mysqli_error($conn);
    }
    return true;
}

function user_exists($conn, $username, $usersurname){
    $sql = "SELECT * FROM users WHERE username='$username' AND usersurname='$usersurname' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
}

function create_user($conn, $username, $usersurname, $email, $password){
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, usersurname, password, email) VALUES ('$username','$usersurname','$passwordHash', '$email')";
    return mysqli_query($conn, $sql);
}

function update_user($conn, $user_id, $new_username, $new_usersurname, $new_email){
    $sql = "UPDATE users SET email = '$new_email', username = '$new_username', usersurname = '$new_usersurname' WHERE id = $user_id";
    return mysqli_query($conn, $sql);
}

function delete_user($conn, $user_id){
    $sql = "DELETE FROM users WHERE id = $user_id";
    return $result = mysqli_query($conn, $sql);
}

 
/* 
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "root";
$db["db_name"] = "login_app";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$connection){
        die("Databases connection failed");
    }

*/




