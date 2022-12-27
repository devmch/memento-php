<?php

$serverName = "u463909974_projects";
$dBUsername = "u463909974_mhvidtfeldt";
$dBPassword = "e2kbOw2B!";
$dBName = "phptest";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
