<!DOCTYPE html>
<html>
<head>
    <title>My bookings</title>
    
</head>
<body>
    <h1>My Restaurant</h1>
    
    <h2>Book a Table</h2>
    <!--this is the booking form-->
    <form method="POST" action="book.php">
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
    
    
    
    <h2>Search for booking</h2>
    <!--this searches for a booking-->
    
    
</body>
</html>

<?php

?>