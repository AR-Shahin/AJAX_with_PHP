<?php
include 'class.php';
$ob = new Dboperation();
//username avilable
if(isset($_POST['username'])){
    $n = $_POST['username'];
    echo  $ob->checkUser($n);
    exit();
}