<?php
session_start();

$_SESSION['produtos'][] = $_GET['id'];
$_SESSION['total'] = $_SESSION['total']+$_GET['p'];

header('location:insereVenda.php');
die();