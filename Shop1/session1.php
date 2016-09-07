<?php
session_start();

if (!isset($_SESSION['id'])){
header('location:order1.php');
}

$ses_id = $_SESSION['id'];

?>