<?php
include("db_conn.php");
date_default_timezone_set('Asia/Taipei');
header("Content-Type:text/html; charset=utf-8");
header("Access-Control-Allow-Origin: *");
if(isset($_POST)){

    $userID = $_POST['userName'];
    $userPassword = sha1($_POST['userPassword']);

    // $userID = $_GET['userName'];
    // $userPassword = sha1($_GET['userPassword']);

    $sql = "SELECT * FROM `linhao` WHERE `email` ='$userID' AND `password`='$userPassword'";

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $val = $result->num_rows;
    if( $val == 1){
        $outDate = array("status" => "success");
    }else{
        $outDate = array("status" => "noAccount");
    }
}else{
    $outDate = array("status" => "fail");
}
echo json_encode($outDate, JSON_UNESCAPED_UNICODE);
