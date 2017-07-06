<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "simple";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if(!$link){
    echo "db error".mysqli_connect_error();
    exit;
}

function checkUser($account, $password, $link){
    $real_password = "";
    
    $query = "select * from user where account='$account'";
    $result = mysqli_query($link, $query);
    
    if(!$result){
        return false;
    }else{
        $row = mysqli_fetch_assoc($result);
        $real_password = $row['password'];
    }
    
    if($real_password == $password)  
        return true;
    else
        return false;
    
}

function getUrl($account, $link){
    $url = "";
    
    $query = "select * from user where account = '$account'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $url = $row['url'];
    
    return $url;
}

