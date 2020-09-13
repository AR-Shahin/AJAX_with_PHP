<?php
include 'class.php';

if(isset($_POST['search'])){
    $ob = new Dboperation();
    $txt = $_POST['search'];
    echo $ob->liveSearch($txt);
    exit();
}