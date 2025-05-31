<?php
$c=mysqli_connect("localhost","root","","BookStore");

$mail=$_POST["mail"];
$pass=$_POST["pass"];

$result=mysqli_query($c,"select Password from registration where Email='$mail'");

$row=mysqli_fetch_assoc($result);

if($pass==$row["Password"])
{
    echo "<script>alert('Login Successfull')</script>
    <script>window.location.href='catalogue.html';</script>";
}
else
{
    echo "<script>alert('Login Failed');</script>
    <script>window.location.href='login.html';</script>";
}

mysqli_close($c);
?>