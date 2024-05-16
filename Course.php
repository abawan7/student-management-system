<?php

class Course
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAll(){
        $courses = [];
        $sql = "SELECT * FROM courses";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $courses[] = $row;
            }
        }

        return $courses;
    }

    public function getNameByID($id)
    {
        $sql = "SELECT name FROM courses WHERE id= $id";
        $result = $this->conn->query($sql);
        $course = $result->fetch_assoc();

        return $course['name'];
    }
}