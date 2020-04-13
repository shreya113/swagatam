<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //collect values of input field
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];
    
    $con=mysqli_connect('localhost','root','','abhishek2');
    $query="INSERT INTO contactformdata (name,email,number,message) VALUES ('$name','$email','$number','$message')";
    
    
    $run=mysqli_query($con,$query);
    
    if($run==TRUE)
    {
        header('location: thank-you.php');
    }
    else
    {
      echo "Wrong!!";
    }
    
}
?>