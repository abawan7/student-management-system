<?php
include("config.php");
include ("Course.php");

$id = $_GET['id'];
$sql = "SELECT * FROM students_courses where student_id={$id}";
$students_course = $conn->query($sql);


$course = new Course($conn);

?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html>
<head>
    <style>
        .btn {
            background-color: black;
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }

        /* Darker background on mouse-over */
        .btn:hover {
            background-color: gray;
        }

        body {
            background-size: 1440px 800px;
            background-image: url('https://images.pexels.com/photos/159213/hall-congress-architecture-building-159213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        }
    </style>
    <title>Students</title>
</head>

<body>
<h1 style="text-align: center">Students</h1>
<form action="update-student-form.php" method="get" style="margin-top: 0px ;margin-left: 600px;max-width:400px; color: #f1f1f1; float: left">
    <h2 style="color: black">Student ID To Update: </h2> <input type="number" name="id">
    <button type="Submit" style="margin:auto;"><i class="fa fa-search"></i>Enter</button>
</form>
<table style="margin-left: 350px; border:1px solid black;width: 50%;">
    <tr>
        <th>Course_Name</th>
    </tr>
    <?php
    if ($students_course->num_rows > 0) {
        // output data of each row
        while ($row = $students_course->fetch_assoc()) {
            ?>
            <tr>
                \\<td><?php echo $course->getNameByID($row["course_id"]) ?></td>
            </tr>
            <?php
        }
    } ?>
</table>
<button style="margin-top: 20px; margin-left: 900px" class="btn">
    <i class="fa fa-home"</i><a href="add-new-student-form.php">ADD</a>
</button>
<button class="btn">
    <i class="fa fa-home"</i><a href="delete-student-form.php">DELETE</a>
</button>
</body>
</html>
</body>