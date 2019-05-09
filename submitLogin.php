<?php

session_start();

if(isset($_SESSION['name']))
    header("Location: a.php");  

else
 
echo "Your session is not set"; 
