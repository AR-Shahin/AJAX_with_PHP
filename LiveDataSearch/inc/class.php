<?php

class Dboperation{

    private $con;
    public function db()
    {
        $con = mysqli_connect('localhost:3307','root','','ajax');
        return $con;
    }

    public function liveSearch($txt){
        $sql = "SELECT * FROM `livesearch` WHERE `name`LIKE '%$txt%' OR `email` LIKE '%$txt%' OR `phone` LIKE '%$txt%' ";
        $res = $this->db()->query($sql);
        $result = '';

        if($res->num_rows == 0){
            $result.='<h3 class="text-center">Not Found</h3>';
        }else{
            $result.='<table class="table table-bordered table-striped table-hover">
            <tr>
                <th>name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>';
            while ($data = $res->fetch_assoc()){
                $result.= '<tr>
                    <td>'.$data['name'].'</td>
                    <td>'.$data['email'].'</td>
                    <td>'.$data['phone'].'</td>
                </tr>';
            }
        }
        $result.='</table>';
        return $result;
    }
}


?>