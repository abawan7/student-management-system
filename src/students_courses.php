<?php

class students_courses
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function getByID($id){
        $sql = "SELECT course_id FROM students_courses WHERE id= $id";
        $result = $this->conn->query($sql);
        $courses = $result->fetch_assoc();

        return $courses;
    }
}