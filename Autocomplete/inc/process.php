<?php
include 'class.php';
//autocomplete
if(isset($_POST['skill'])){
    $s = $_POST['skill'];
    $ob = new Dboperation();
    echo $ob->autoComplete($s);
    exit();
}