<?php
$hostName = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbName = "ProductDatabase";
$conn = new mysqli($hostName, $dbuser, $dbpassword, $dbName) or die('connection failed');
?>