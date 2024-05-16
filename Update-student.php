<?php
include("config.php");
include("Student.php");

$student = new Student($conn);
$student->update($_GET);
