<?php include('header.php'); ?>


    
    <h2>Michel's Restaurant</h2>
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

    
    
  
    

<?php
include('footer.php');

?>