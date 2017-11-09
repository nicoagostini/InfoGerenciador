<?php
session_start();

$_SESSION['idcliente'] = $_GET['id'];
$_SESSION['cliente'] = '1';
$_SESSION['classe'] = $_GET['tipo'];

header('location:insereVenda.php');
die();