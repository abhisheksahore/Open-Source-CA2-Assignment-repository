<?php

session_start();
$connect = mysqli_connect('localhost', 'root', 'Abhishek@123');


if($connect){
    echo "connection successful";
}else{
    echo "connection invalid";
}
mysqli_select_db($connect, 'opensourceca2');

$name = $_POST['name'];
$username = $_POST['username'];
$registrationId = $_POST['registration'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if($name != '' and $username != '' and $registrationId != '' and $email != '' and $mobile != '' and $password != '' and $confirmPassword != '')
{
    
    
    $querySelect = " select * from signup where username = '$username' or registrationId = '$registrationId' or email = '$email' or mobile = '$mobile' ";
    
    $exists = mysqli_query($connect, $querySelect);
    
    $num = mysqli_num_rows($exists);
    
    echo $num;
    
    
    if ($num)
    {
        
        header('location: signup.php');
        $case = "User already exists.";
        $_SESSION['invalid'] = $case;
        
    }
    else
    {
        if ($confirmPassword == $password)
        {
            $queryData = " insert into signup(name, username, registrationId, email, mobile, password) values('$name', '$username', '$registrationId', '$email', '$mobile', '$password') ";
            mysqli_query($connect, $queryData);
            header('location: login.php');
        }
        else
        {
            $case = 'Password and Confirm Password does not match.   ';
            $_SESSION['invalid'] = $case;
            header('location: signup.php');
        }
    }
    
}
else{
    $case = 'Please! fill all the fields.';
    $_SESSION['invalid'] = $case;
    header('location: signup.php');
}



?>