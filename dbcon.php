<?php

session_start();

//$con = mysqli_connect("localhost", "root", "", "citizenparticipation");
$con = mysqli_connect("127.0.0.1:49841", "azure", "6#vWHD_$", "citizenparticipation");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }

define('TIMEZONE', 'America/Chicago');
date_default_timezone_set(TIMEZONE);






?>
