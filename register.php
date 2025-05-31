<?php

$c=mysqli_connect("localhost","root","","BookStore");

$f=$_POST["fname"];
$l=$_POST["lname"];
$cn=$_POST["cn"];
$mail=$_POST["mail"];
$pass=$_POST["pass"];
$hb=$_POST["hobby"];

$i="insert into registration(FirstName,LastName,Contact,Email,Password,Hobbies) values('$f','$l','$cn','$mail','$pass','$hb')";
mysqli_query($c,$i);

$result=mysqli_query($c,"select FirstName,LastName,Contact,Email,Password,Hobbies from registration");

echo "<script>alert('Registration Successfull')</script>
        <script>window.location.href='login.html';</script>";

mysqli_close($c);

?>