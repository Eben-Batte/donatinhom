<?php
//
$bd = new PDO("mysql:host=localhost;dbname=lewbas;charset=utf8","root","");
//Les conditions
if(!empty($_POST['name'])and
!empty($_POST['email'])and
!empty($_POST['phone'])and
!empty($_POST['comments']))

// Declaration des variables
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comments=$_POST['comments'];

// Enregistrement
$bd->exec("insert into contact(name,email,phone,comments) values('$name','$email','$phone','$comments')");
 }
?>