<?php include_once('functions/functions.php');
    
    //starts the session 
    session_start();     
    //checks if the session has been initiated
    if(!isset($_SESSION['user_session']))
      {
        //if not, it takes us back to the main page  
        header('Location: index.php');
      }
      
      
    include('header.php'); ?>


    
    <h2>Book a Table</h2>
    <!--this is the booking form-->
    <form method="POST" action="book.php" data-ajax="false">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <label>Date</label>
        <input type="date" name="datebox">
        <label>Time</label>
        <input type="time" name="timebox">
        <!--this allows us to check which type of form was used-->
        <input type="hidden" value="book" name="book">
        <input type="submit" value="book">
        
    </form>
    <a href="all.php" rel="external">Display all records</a>
    <a href="delete.php" rel="external">Delete record</a>
    
    
  
    

<?php
include('footer.php');

?>