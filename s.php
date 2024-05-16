<?php
include("config.php");
?>


<!DOCTYPE html>
<html>
<head>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #151719;
            display: inline-table;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin-top: 20px;
            margin-left: 90px;
        }

        .waviy {
            position: center;
            -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0, 0, 0, .2));
            font-size: 60px;
        }

        .waviy span {
            font-family: Arial Rounded MT Bold ";
            position: relative;
            display: inline-block;
            color: #000000;
            text-transform: uppercase;
            animation: waviy 1s infinite;
            animation-delay: calc(.1s * var(--i));

        }

        @keyframes waviy {
            0%, 40%, 100% {
                transform: translateY(0)
            }
            20% {
                transform: translateY(-20px)
            }
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        body {
            background-size: 1440px 800px;
            background-image: url('https://images.pexels.com/photos/159213/hall-congress-architecture-building-159213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        }
    </style>
    <title>SMS</title>
</head>
<body>
<div class="waviy">
    <span style="--i:1">S</span>
    <span style="--i:2">c</span>
    <span style="--i:3">h</span>
    <span style="--i:4">o</span>
    <span style="--i:5">o</span>
    <span style="--i:6">l</span>
    <span style="--i:7"> </span>
    <span style="--i:7">M</span>
    <span style="--i:8">a</span>
    <span style="--i:9">n</span>
    <span style="--i:10">a</span>
    <span style="--i:11">g</span>
    <span style="--i:12">e</span>
    <span style="--i:13">m</span>
    <span style="--i:14">e</span>
    <span style="--i:15">n</span>
    <span style="--i:16">t</span>
    <span style="--i:17"> </span>
    <span style="--i:17">S</span>
    <span style="--i:18">y</span>
    <span style="--i:19">s</span>
    <span style="--i:20">t</span>
    <span style="--i:21">e</span>
    <span style="--i:22">m</span>
</div>
<div style="width: 400px; float: right; color: #f1f1f1">
    <img style="width: 400px; float: right"
         src="https://assets-homepages-learning.3plearning.net/wp-content/uploads/2020/06/blog-20-student-engagement-strategies-captivating-classroom.png">
    <strong>Dear Students:</strong> <p>We are delighted to welcome you to UC Santa Barbara and excited by the return of our vibrant campus life! Whether
        you are beginning or continuing your educational journey with us, we look forward to learning, exploring, and
        growing together.</p>
</div>

<a href="students.php"><h1 style="text-align: left; margin-top: 100px; color: black; font-size: 40px">Students</h1>
</a>
<form action="search.php" method="post" style="margin-top: 300px;max-width:400px; color: #f1f1f1; float: left">
    <h3>Search Student</h3> <input type="text" name="name">
    <button type="Submit" style="margin:auto;"><i class="fa fa-search"></i>Enter</button>
</form>
</body>
</html>