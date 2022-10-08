<?php
    $servername="localhost";
    $username="u793649929_kuku";
    $password="*[SgQ/Am8mF";
    $database="u793649929_dairy";

    //For Connection
    $con=new mysqli($servername,$username,$password,$database);

    //For check connection
    if($con->$connect_error){
        die("Connection Failed".$con->$connect_error);
    }
?>