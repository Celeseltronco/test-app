<?php


function is_admin() {
    return isset($_SESSION['logged_in'], $_SESSION['role'])
           && $_SESSION['logged_in'] === true
           && $_SESSION['role'] === 'admin';
}

function is_user_logged_in(){
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// function is_admin(){
//     return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
// }

function redirect($location){
    header("Location: login.php"); 
    exit;
}
function setActiveCLass($pageName){
    $current_page = basename($_SERVER['PHP_SELF']);
    return  ($current_page === $pageName) ? "active": '';
}

function getPageClass(){
    return basename($_SERVER['PHP_SELF'], ".php");
}


function full_month_date($date){
   return  date("F d, Y",  strtotime($date));
}








