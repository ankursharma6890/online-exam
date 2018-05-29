<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'exam');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


// creaate database
// CREATE TABLE `users` (
//   `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//   `username` varchar(100) NOT NULL,
//   `email` varchar(100) NOT NULL,
//   `password` varchar(100) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
