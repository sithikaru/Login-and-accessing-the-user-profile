<?php

$name = $_POST["n"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$password = $_POST["p"];

$dbms = new mysqli("localhost","root","LahiruJava03@","session_practical","3306");
$q = "INSERT INTO `user`(`email`,`name`,`mobile`,`password`) VALUES 
('".$email."','".$name."','".$mobile."','".$password."')";

$dbms->query($q);

echo ("success");

?>