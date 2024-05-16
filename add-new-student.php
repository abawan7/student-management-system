<?php
include("config.php");
include("Student.php");

$student = new Student($conn);
$student->insert($_GET);
