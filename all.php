<?php

    session_start();     
   
    if(!isset($_SESSION['user_session']))
      {
        header('Location: index.php');
      }

include('header.php');

include_once('functions/functions.php');


   
    display_all();





include('footer.php');
?>

