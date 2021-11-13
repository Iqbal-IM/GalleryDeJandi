<?php
session_start();
error_reporting(~E_NOTICE);

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'gallerydejandi';
$koneksi = mysqli_connect($host, $user, $password, $dbname);
