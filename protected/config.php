<?php
// Web directory to HSDLinks installation, with beginning and trailing slash.
$basedir = "/";

// Connecting to the database
$host = "localhost";
$user = "hsdlinks";
$pass = "password";
$database = "hsdlinks";

$mysqli = new mysqli($host, $user, $pass, $database);
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}