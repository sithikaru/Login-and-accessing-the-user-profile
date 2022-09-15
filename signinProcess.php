<?php

session_start();

$email = $_POST["e"];
$password = $_POST["p"];

$dbms = new mysqli("localhost","root","LahiruJava03@","session_practical","3306");
$q = "SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$password."'";

$rs = $dbms->query($q);
$num = $rs->num_rows;

if($num == 1){

$d = $rs->fetch_assoc();
$_SESSION["u"] = $d;

echo "success";

}else{
    echo ("Invalid username or password");
}

?>