<?php
session_start();

$hospitalname = $_SESSION["hospitalname"];
$user = $_SESSION['user'];
$name = $_SESSION['name'];
$title = array();
$title[0] = $hospitalname;
$title[1] = $user;
$title[2] = $name;
echo json_encode($title);
?>