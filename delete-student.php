<?php
include("config.php");
include("Student.php");

$student = new Student($conn);
$id = $_GET['id'];
$student->delete($id);
?>