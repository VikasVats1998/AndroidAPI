<?php
    include "connection.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $qty=$_POST['qty'];
    $fat=$_POST['fat'];
    $rate=$_POST['rate'];
    $date=$_POST['date'];
    $session=$_POST['session'];

    $query="UPDATE milkdata SET name='$name',qty='$qty',fat='$fat',rate='$rate',date='$date',session='$session' WHERE id='$id' ";

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