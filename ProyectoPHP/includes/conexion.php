<?php

$server = 'localhost';
$username = 'root';
$password ='';
$database = 'blogmaster';

$db= mysqli_connect($server, $username, $password,$database);

mysqli_query($db, "SET NAMES 'utf8'");

// inciar la sesion
session_start();