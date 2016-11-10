<?php

function add_record(){
    //function adds to the database
    require('dbconnect.php');
    $name=$_POST["namebox"];
    $date=$_POST["datebox"];
    $time=$_POST["timebox"];
    
    $sql = "INSERT INTO bookings (name, date,time) VALUES ('$name', '$date', '$time')";
    
    if(mysqli_query($conn,$sql)){
       
    }
    else {
        echo "Error ".$sql." ".mysqli_error($conn);
    }
    }

function display_all(){
    
    //function to display all of the records in the bookings table
    require('dbconnect.php');
    $myquery = "SELECT * FROM bookings";
    
    $result=mysqli_query($conn,$myquery);
    
    if($result){
       
    }
    else {
        echo "Error ".$sql." ".mysqli_error($conn);
    }
    
    if($result->num_rows>0){
        //while there is row
        while($row=$result->fetch_assoc()){
            echo "Name ".$row["name"]. " Date ".$row["date"]. " Time ".$row["time"]."<br/>";
        }
    }

}//end of display all




?>