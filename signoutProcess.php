<?php

session_start();

$_SESSION["u"] = null;
session_destroy();

echo ("success");

?>