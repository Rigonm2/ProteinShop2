<?php
include_once 'userRepository.php';
$id = $_GET['id'];
$strep = new userRepository();
$strep->deleteStudent($id);

header("location:Userat.php");
?>