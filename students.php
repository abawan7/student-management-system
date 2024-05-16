<?php
include("config.php");
include ("Course.php");

$sql = "SELECT * FROM student";
$students = $conn->query($sql);

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
    <h2 style="color: black">Student Roll No: </h2> <input type="number" name="id">
    <button type="Submit" style="margin:auto;"><i class="fa fa-search"></i>Enter</button>
</form>
<table style="margin-left: 350px; border:1px solid black;width: 50%;">
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Parent</th>
        <th>Admission Date</th>
        <th>Contact No</th>
        <th>Course_id</th>
    </tr>
    <?php
    if ($students->num_rows > 0) {
        // output data of each row
        while ($row = $students->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["student_id"] ?></td>
                <td><?php echo $row["first_name"] . ' ' . $row["last_name"] ?></a></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["parent_name"] ?></td>
                <td><?php echo $row["admission_date"] ?></td>
                <td><?php echo $row["contact_no"] ?></td>
                <td><a href="student-view.php?id=<?php echo $row['id'] ?>">VIEW</a></td>
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