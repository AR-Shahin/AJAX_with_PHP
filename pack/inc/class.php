<?php

class Dboperation{

    private $con;
    public function db()
    {
        $con = mysqli_connect('localhost:3307','root','','ajax');
        return $con;
    }


}


?>