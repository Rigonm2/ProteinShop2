<?php
include_once 'proteinRepository.php';
$id = $_GET['id'];
$strep = new proteinRepository();
$strep->deleteProduct($id);

header("location:Pro.php");
?>