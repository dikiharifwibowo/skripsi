<?php
/**
 * Created by PhpStorm.
 * User: kazt
 * Date: 7/8/2017
 * Time: 11:13 AM
 */
    include "../connection.php";

    $data = json_decode(file_get_contents("php://input"));
    if (count($data) > 0){
        if (isset($data->namabanksoal) && isset($data->idMapel)){
            $namaBankSoal = $data->namabanksoal;
            $idMapel = $data->idMapel;
            $query = mysqli_query($conn, "SELECT * FROM banksoal WHERE namaBankSoal LIKE '$namaBankSoal' AND idMapel = $idMapel");
            $row = mysqli_fetch_row($query);
            if ($row == null){
                echo true;
                exit;
            }else{
                echo false;
                exit;
            }
            mysqli_close($conn);
        }
    }

?>