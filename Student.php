<?php

class Student
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insert($data)
    {
        $firstName = $data['fname'];
        $lastName = $data['lname'];
        $email = $data['email'];
        $parent_name = $data['parent_name'];
        $admission_date = $data['admission_date'];
        $contact_no = $data['contact'];
        $course_id = $data['subject_id'];
        $student_id = $data['id'];
        $sql = "INSERT INTO student (student_id,first_name, last_name, email,parent_name,admission_date,contact_no) VALUES ('$student_id','$firstName','$lastName','$email','$parent_name','$admission_date','$contact_no')";
        if ($this->conn->query($sql) === TRUE) {
            $last_id = $this->conn->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            $this->multiple($last_id,$course_id);
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            die;
        }

        header('Location: students.php');
    }

    public function multiple($student_id, $course_id)
    {
        foreach ($course_id as $cid) {
            $sql = "INSERT INTO students_courses (student_id, course_id) Values ('$student_id','$cid')";
            if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
            }
        }
        die;
    }

    public function delete($student_id)
    {
        $sql = "DELETE FROM student WHERE student_id='" . $student_id . "'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Deleted";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        header('Location: students.php');
    }

    public function update($data)
    {
        $firstName = $data['fname'];
        $lastName = $data['lname'];
        $email = $data['email'];
        $parent_name = $data['parent_name'];
        $admission_date = $data['admission_date'];
        $contact_no = $data['contact'];
        $course_id = $data['subject_id'];
        $student_id = $data['id'];
        $sql = "UPDATE student SET first_name = '$firstName', last_name = '$lastName', email = '$email', parent_name = '$parent_name', admission_date = '$admission_date', contact_no = '$contact_no', course_id = '$course_id' WHERE student_id=$student_id";
        if ($this->conn->query($sql) === TRUE) {
            echo "Update successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
        header('Location: students.php');
    }

    public function getByName($name)
    {

        $students = [];
        $sql = "SELECT * FROM student WHERE first_name='" . $name . "'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }

        return $students;
    }

    public function getByID($id)
    {
        $students = [];
        $sql = "SELECT * FROM student WHERE student_id='" . $id . "'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }

        return $students;
    }

    public function getByCourse($id)
    {
        $students = [];
        $sql = "SELECT  * from student INNER JOIN course on student.student_id =courses.student_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }
    }
}