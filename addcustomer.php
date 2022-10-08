<?php
    include "connection.php";

    $c_name=$_POST['c_name'];
    $f_name=$_POST['f_name'];
    $mobile=$_POST['mobile'];
    

    $query="INSERT INTO customerdata(customer_name,father_name,mobile) VALUES($c_name,$f_name,$mobile)";

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