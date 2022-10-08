<?php
    include "connection.php";

    $id=$_POST['id'];
    $c_name=$_POST['c_name'];
    $f_name=$_POST['f_name'];
    $mobile=$_POST['mobile'];
    

    $query="UPDATE customerdata SET customer_name='$c_name',father_name='$f_name',mobile='$mobile' WHERE id='$id' ";

    $run=$con->query($query);
    if($run == 1)
    {
        $response=array("Status"=>"1", "Message"=>"inserted");
    }
    else{
        $response=array("Status"=>"0", "Message"=>"Not inserted");
    }

    echo json_encode($response);
?>