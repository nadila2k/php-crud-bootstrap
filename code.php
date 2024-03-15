<?php 
session_start();
require 'dbcon.php';

if (isset($_POST['save_student'])) {
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $course=mysqli_real_escape_string($conn,$_POST['course']);

    $query= "Insert into students (	name, email, phone, course) VALUES('$name','$email','$phone','$course')";

    $query_run=mysqli_query($conn,$query);
    if ($query_run==true) {
        $_SESSION['message']="Student Create Successfully";
        header('location:student-create.php');
        exit(0);
    } else {
        $_SESSION['message']="Student Not Created";
        header('location:student-create.php');
        exit(0);
    }
    
} else {
    # code...
}

?>