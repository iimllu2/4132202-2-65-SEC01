<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";

try {
     $link = mysqli_connect($host,$user,$pass,$db);
     mysqli_query($link, "SET NAME utf8");
} catch (Exception $e){
    echo $e . ":Error no mysqli_error($link)";
}

