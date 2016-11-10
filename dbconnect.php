<?php

    $servername ="localhost";
    $username ="mickg77";
    $password ="";
    $dbname ="c9";
    
    //creates the connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

?>