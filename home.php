<?php

session_start();
session_destroy();
if(!isset($_SESSION['username']))
{
    header('location: login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="opensourceca2.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif|Pacifico|Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class=""></div>
        <h2 style = 'text-align : center; text-color: cyan;border:2px solid black'> WELCOME, <?php  echo $_SESSION['username']; ?></h2>
        <div class="form">
                    <div class="btn">
                        <div class="btn2">
                            
                            <a href="logout.php" class="button" style='text-decoration:none;
                            text-align: center;'>Logout</a>
                        </div> 
                    </div>      
                </div>
    </div>
</body>
</html>