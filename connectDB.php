<?php
// create database connection 
$host = "localhost";
$dbname = "succevo task";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);