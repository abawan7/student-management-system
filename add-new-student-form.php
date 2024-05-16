<?php
include("config.php");
include("Course.php");


$course = new Course($conn);
$courses = $course->getAll();
?>
<!DOCTYPE html>
<html>
<head>

    <style>
        * {
            box-sizing: border-box
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 50%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        body {
            background-color: black;
            background-position-x: 400px;
            background-size: 1400px;;
            background-image: url("https://img.freepik.com/free-photo/portrait-happy-young-african-male-student_171337-8887.jpg?w=2000");
        }
    </style>
</head>
<?php

?>
<body>
<form action="add-new-student.php" method="get">
    <label for="ID">Student Roll No:</label><br>
    <input type="number" id="id" name="id" value=""><br><br>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=""><br><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value=""><br><br>
    <label for="parent_name">Parent Name:</label><br>
    <input type="text" id="parent_id" name="parent_name" value=""><br><br>
    <label for="admission_date">Admission Date:</label><br>
    <input type="text" id="admission_date" name="admission_date" value=""><br><br>
    <label for="contact">Contact no:</label><br>
    <input type="text" id="contact" name="contact" value=""><br><br>
    <label for="subject_id">Course ID: </label><br>
    <select name="subject_id[]" id="subject_id" multiple>
    <?php foreach ($courses as $course) { ?>
        <option value="<?php echo $course["id"] ?>"><?php echo $course["name"] ?></option>
        <?php
    } ?>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>
</body>
</html>