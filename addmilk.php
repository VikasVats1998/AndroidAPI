<?php
    include "connection.php";

    $name=$_POST['name'];
    $qty=$_POST['qty'];
    $fat=$_POST['fat'];
    $rate=$_POST['rate'];
    $date=$_POST['date'];
    $session=$_POST['session'];

    $query="INSERT INTO milkdata(name,qty,fat,rate,date,session) VALUES($name,$qty,$fat,$rate,$date,$session)";

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