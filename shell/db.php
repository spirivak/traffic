<?php
$mysqli = new mysqli("localhost", "ncforgua_sev", "h8O1u3wl", "ncforgua_inside");
//$mysqli = new mysqli("localhost", "ncforgua_sev", "derAd432molses", "ncforgua_inside");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//$mysqli->query("SET NAMES utf8");
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET character_set_connection = utf8");
$mysqli->query("SET collation_connection = utf8");
