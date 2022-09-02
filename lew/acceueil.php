<?php
//
$bd = new PDO("mysql:host=localhost;dbname=lewbas;charset=utf8","root","");

// conditons
if(!empty($_POST['email']))

//variable
{
    $_email=$_POST['email'];


    //enregistrement

$bd->exec("insert into accueil(email) values('$email')");
header('Location: index.html');
exit;
}



?>