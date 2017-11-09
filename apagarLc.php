<?php
include_once("classes/lc.class.php");
include_once("classes/lcControle.class.php");

$id = $_GET['id'];

$lcc = new lcControle();
$lcc->controleAcao('deletar', $id);
header("location:lc.php");
die();