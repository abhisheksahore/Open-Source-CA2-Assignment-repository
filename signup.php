<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="opensourceca2.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif|Pacifico|Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        
            
               <form action="registration.php" method="POST" class="formContent">
               <div class="form">
               <h1>Signup to the world's best website hosted by Alpha</h1>
               </div>
               <div class="form">
                    <label for="name">
                        NAME
                    </label>
                    <input type="text" name="name"  placeholder="Name">
                </div>
                <div class="form">
                    <label for="username">
                        USERNAME
                    </label>
                    <input type="text" name="username"  placeholder="Username">
                </div>
                <div class="more">
                    <div class="form mg">
                        <label for="registration">
                            REGISTRATION ID
                        </label>
                        <input type="text" name="registration"  placeholder="Registration">
                    </div>
                    <div class="form ">
                        <label for="mobile">
                            MOBILE
                        </label>
                        <input type="text" name="mobile"  placeholder="Mobile">
                    </div>
                </div>  
                <div class="form">
                    <label for="email">
                        EMAIL
                    </label>
                    <input type="email" name="email"  placeholder="Email">
                </div>
                <div class="more">  
                <div class="form mg">
                    <label for="password">
                        PASSWORD
                    </label>
                    <input type="password" name="password"  placeholder="Password">
                </div>
                
                <div class="form">
                    <label for="confirmPassword">
                        CONFIRM PASSWORD
                    </label>
                    <input type="password" name="confirmPassword"  placeholder="Confirm Password">
                </div>
                </div>
                
                    
                <div class="form">
                    <div class="btn">
                        <div class="btn2">
                            <button type="submit" class="button mg"> Signup </button>
                            <a href="login_thru.php" class="button" style='text-decoration:none;
                            text-align: center;'>Login</a>
                        </div> 
                    </div>      
                </div>
                <div class="error"><p><?php  if ($_SESSION!=NULL){echo $_SESSION['invalid'];} ?></p></div>
            </form>        
    </div>


    
</body>




</html>


