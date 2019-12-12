<?php
header("Access-Control-Allow-Origin:*");
$link=mysqli_connect(
    "localhost",
    "s107021151",
    "choh9fei",
    "s107021151"
    // "上面是資料庫的資料夾名稱"
);
if(!$link){
    echo "Error: unable to connect to MySQL" .PHP_EOL;
    echo "Debugging errno:" .mysqli_connect_errno() .PHP_EOL;
    echo "Debugging errno:" .mysqli_connect_errno() .PHP_EOL;
    exit;
}
$link -> set_charset("utf8");