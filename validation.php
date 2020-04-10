<?php

session_start();
$connect = mysqli_connect('localhost', 'root', 'Abhishek@123');


if($connect){
    echo "connection successful";
}else{
    echo "connection invalid";
}
mysqli_select_db($connect, 'opensourceca2');




$username = $_POST['username'];
$password = $_POST['password'];



$querySelect = " select * from signup where username = '$username'  and password = '$password' ";
$queryUser = "select * from signup where username = '$username' ";

$exists = mysqli_query($connect, $querySelect);
$userexists = mysqli_query($connect, $queryUser);
//print_r($exists);
$num = mysqli_num_rows($exists);
$usernum = mysqli_num_rows($userexists);
echo $num;
echo $usernum;

if($username != "" and $password != ""){


if($num)
{
    $_SESSION['username'] = $username ;
    header('location: home.php');
    
}
elseif($usernum)
{
    $case = 'Invalid Password';
    $_SESSION['invaliduserpass'] = $case;
    header('location: login.php');
}
else
{
    $case = 'User does not exist. Signup or enter valid username.';
    $_SESSION['invaliduserpass'] = $case;
    header('location: login.php');
}
}
else{
    $case = 'Please! fill the credentials.';
    $_SESSION['invaliduserpass'] = $case;
    header('location: login.php');
}
?>





