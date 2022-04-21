<?php
session_start();

$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$username=$_POST["username"];
$password=$_POST["password"];
$age=$_POST["age"];
$anciennete=$_POST["anciennete"];


  
   //On insère les données reçues
   $sth = $db->prepare("
       INSERT INTO form(prenom, nom, username, password, age, anciennete)
       VALUES(:prenom, :nom, :username, :password, :age, :anciennete)");
   $sth->bindParam(':prenom',$prenom);
   $sth->bindParam(':nom',$nom);
   $sth->bindParam(':age',$age);
   $sth->bindParam(':username',$username);
   $sth->bindParam(':password',$password);
   $sth->bindParam(':anciennete',$anciennete);
   $sth->execute();

   ?>