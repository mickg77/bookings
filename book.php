<?php

include('header.php');
require('dbconnect.php');
include_once('functions/functions.php');

if($_POST["book"]=="book"){
   
    add_record();
?><!--temporarily closes the php-->

<!--this area is html, that's why I've put it outside the php-->
    
    <p>Record added.</p>
    <a href="index.php">Go home</a>

<!--opening php again-->    
<?php
    
}

include('footer.php');
?>

