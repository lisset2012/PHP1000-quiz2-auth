<?php

// get user info from post
$user = $_POST["user"];
$pass = $_POST["pass"];

// create session
session_start();
$_SESSION["name"] = $user;


header("Location: login.php");

//write user and pass in a file
$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $user);
fwrite($myfile, $pass);
fclose($myfile);