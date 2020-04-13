<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //collect values of input field
    $name=$_POST['user'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $con=mysqli_connect('localhost','root','','abhishek2');
    $query="INSERT INTO userregistrationdata (user,email,pass) VALUES ('$name','$email','$pass')";
    
    
    $run=mysqli_query($con,$query);
    
    if($run==TRUE)
    {
        header('location: event-thank-you.php');
    }
    else
    {
      echo "Wrong!!";
    }
    
}
?>