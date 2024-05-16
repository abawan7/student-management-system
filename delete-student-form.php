<!DOCTYPE html>
<html>
<head>
    <style>
        * {box-sizing: border-box}

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
            opacity:1;
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
        body{
            background-color: black;
            background-position-x: 400px;
            background-size:  1400px;;
            background-image: url("https://img.freepik.com/free-photo/portrait-happy-young-african-male-student_171337-8887.jpg?w=2000");
        }
    </style>
</head>

<body>
<form action="delete-student.php" method="get" style="margin-top: 300px; margin-left: 300px">
    <label for="ID">Student Roll No:</label><br>
    <input type="number" id="id" name="id" value=""><br><br>
</form>
</body>
</html>
</body>
</html>