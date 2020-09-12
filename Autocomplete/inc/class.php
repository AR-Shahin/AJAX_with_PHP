<?php

class Dboperation{

    private $con;
    public function db()
    {
        $con = mysqli_connect('localhost:3307','root','','ajax');
        return $con;
    }
    public function autoComplete($skill){
        $sql = "SELECT * FROM `skills` WHERE `skill` LIKE '%$skill%' ";
        $res = $this->db()->query($sql);
        $result = '';
        $result.='<div class "skill_style"><ul>';
        if($res->num_rows == 0){
            $result.='<li>Not Found</li>';
        }else{
            while ($data = $res->fetch_assoc()){
                $result.= '<li>'.$data['skill'].'</li>';
            }
        }

        $result.='</ul></div>';
        echo $result;
    }

}

//$ob = new Dboperation();
//$ob->autoComplete('8');
?>