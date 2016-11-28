<?php

include_once('functions/functions.php');
dbconnect();

if(isset($_POST['btn-login'])){
    
    $uname = $_POST['namebox'];
    $upass = $_POST['passwordbox'];
    
   try
       {
          $stmt = $conn->prepare("SELECT * FROM users WHERE username=:uname AND password=:upass LIMIT 1");
          $stmt->bindParam(':uname', $uname);
          $stmt->bindParam(':upass', $upass);
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          
          if($stmt->rowCount() > 0)
          {
                session_start();
                $_SESSION['user_session'] = $userRow['username'];
                
                header('Location: booking.php');
                
             }
             else
             {
                header('Location: admin.php');
             }
          }
       
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
        
        
  
    //http://www.codingcage.com/2015/04/php-login-and-registration-script-with.html
}

?>

<?php include('header.php'); ?>


    
    <h2>Michel's Restaurant</h2>
    <!--this is the login form-->
    <form method="POST" data-ajax="false">
        <label>Name</label>
        <input type="text" name="namebox" required>
        <label>Password</label>
        <input type="password" name="passwordbox" required>

        <input type="submit" value="Login" name="btn-login">
        
    </form>

    
    
  
    

<?php
include('footer.php');

?>