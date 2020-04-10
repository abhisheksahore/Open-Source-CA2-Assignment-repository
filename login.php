<?php

session_start();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="opensourceca2.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif|Pacifico|Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        
            
                <form action="validation.php" method="POST" class="formContent">
                <div class="form">
               <h1>Login to one of the world's best website hosted by Alpha</h1>
               </div>
                <div class="form">
                <label for="username">
                    Username
                </label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="form">
                <label for="password">
                    Password
                </label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form">
                    <div class="btn">
                        <div class="btn2">
                        
                            <button type="submit" class="button mg"> Login </button>
                            <a href="signup_thru.php" class="button" style='text-decoration:none;
                            text-align: center;'>Signup</a>
                        </div> 
                    </div>      
                </div>
                <div class="error"><p><?php  if ($_SESSION!=NULL){echo $_SESSION['invaliduserpass'];} ?></p></div>
            
        
    </div>
</body>

</html>