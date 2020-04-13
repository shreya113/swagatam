<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //collect values of input field
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $productname=$_POST['productname'];
    $quantity=$_POST['quantity'];
    
    $con=mysqli_connect('localhost','root','','abhishek2');
    $query="INSERT INTO productformdata (name,email,number,productname,quantity) VALUES ('$name','$email','$number','$productname','$quantity')";
    
    
    $run=mysqli_query($con,$query);
    
    if($run==TRUE)
    {
        header('location: product-thank-you.php');
    }
    else
    {
      echo "Wrong!!";
    }
    
}
?>