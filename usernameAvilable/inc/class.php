<?php

class Dboperation{

    private $con;
    public function db()
    {
        $con = mysqli_connect('localhost:3307','root','','ajax');
        return $con;
    }
    public function checkUser($username){
        $sql = "SELECT * FROM `username` WHERE `name` = '$username'";
        $res = $this->db()->query($sql);
        if(mysqli_num_rows($res) == 0){
            $rtn = "<span class='text-success'><b>$username</b> is available!!</span>";

            return $rtn;
        }else{

            $rtn = "<span class='text-danger'><b>$username</b> not available! :)</span>";
            return $rtn;
        }

    }
    public function add($b){
        $sel = "INSERT INTO `username`( `name`) VALUES ('$b')";
        $r = $this->db()->query($sel);
    }

}
//class
//$o = new Dboperation();
//$o->checkUser('bbdd');
?>