<?php
    //starts the session 
    session_start();     
    //checks if the session has been initiated
    if(!isset($_SESSION['user_session']))
      {
        //if not, it takes us back to the main page  
        header('Location: index.php');
      }
      
      
include('header.php');

include_once('functions/functions.php');


   
    delete_record();
?>
    <!--this area is html, that's why I've put it outside the php-->
    
    
    

<?php
    


include('footer.php');
?>

