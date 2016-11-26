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
        
        echo '<table>';
        while($row=$result->fetch_assoc()){
            
            echo 
            "<tr><td>Name : ".$row["name"]. 
            "</td><td> Date : ".$row["date"]. 
            "</td><td> Time : ".$row["time"].
            "</td><td>
            </td><tr/>";
        }
        echo '</table>';
        
    }

}//end of display all

function delete_record(){
    
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
    
        echo '<table>';
        while($row=$result->fetch_assoc()){
           
            echo'<tr><td>id : '.$row["booking_id"].
            '<td>Name : '.$row["name"]. 
            '</td><td> Date : '.$row["date"]. 
            '</td><td> Time : '.$row["time"].
            '</td><td>';
            echo "<a onclick='return checkDelete()' href='delete.php?action=delete&booking_id=".$row['booking_id']."'>Delete this!</a>";
            
            
            echo'</td><tr/>';
        }
        echo'</table>';
    }
    
   if($_GET['action'] == 'delete') { // if delete was requested AND an id is present...
    
    $num=$_GET['booking_id'];
    
    $sql = "DELETE FROM bookings WHERE booking_id = $num"; //

    $result=mysqli_query($conn,$sql);
    
    if($result){
       echo 'Record Deleted';
       
              
       echo'<a href="index.php">Home</a>';
    }
    else {
        echo "There is an Error ".$sql."<br/> ".mysqli_error($conn);
    } 

}

}//end of display all

?>