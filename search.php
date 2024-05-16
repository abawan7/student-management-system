<?php
include("config.php");
include("Student.php");

$studentObj = new Student($conn);
$students = $studentObj->getByName($_POST["name"]);
?>


<!DOCTYPE html>
<html>
<head>
    <title style="text-align: center">Students</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1 style="text-align: center">Students</h1>
<table style="float: right; margin-right: 100px; border:1px solid black;width: 50%;">
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Field</th>
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student["first_name"] . ' ' . $student["last_name"] ?></td>
            <td><?php echo $student["Field"] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
</body>
</html>