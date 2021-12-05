<?php


session_start();
error_reporting(~E_NOTICE);

$host = 'jongkreatif.com';
$user = 'u5250287_gallerydejandi';
$password = 'gallerydejandi1234';
$dbname = 'u5250287_gallerydejandi';
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// $host = 'localhost';
// $user = 'root';
// $password = '';
// $dbname = 'gallerydejandi';
// $koneksi = mysqli_connect($host, $user, $password, $dbname);
