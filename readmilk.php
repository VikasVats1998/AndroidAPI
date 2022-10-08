<?php
    include "connection.php";

    $query="SELECT * FROM milkdata";

    $run=$con=>query($query);

    $row=$run->fetch_all(MYSQL_ASSOC);

    if($run == 1)
    {
        $response=array("Status"=>"1", "Message"=>$row);
    }
    else{
        $response=array("Status"=>"0", "Message"=>$row);
    }

    echo json_encode($response);

?>