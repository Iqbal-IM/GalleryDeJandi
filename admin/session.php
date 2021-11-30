<?php

// Start session
session_start();

//Mngecek dan mendapatkan SESSION status
if (isset($_SESSION["status"])) $sessionStatus = $_SESSION["status"];
else $sessionStatus = false;

// Mengecek dan mendapatkan data nama
if (isset($_SESSION["nama"])) $sessionName = $_SESSION["nama"];
else $sessionName = "";

// Mengecek dan mendapatkan email
if (isset($_SESSION["user"])) $sessionUser = $_SESSION["user"];
else $sessionUser = "";
