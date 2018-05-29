<?php
include('server.php');

 $rollno = $_POST['rollno'];
 $name = $_POST['name'];
 $fathername = $_POST['fathername'];

 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $course = $_POST['course'];
 $gender = $_POST['gender'];


 // $_SESSION['name'] = $name;
 // $_SESSION['email'] = $email;
 // $_SESSION['image'] = $image;

 if ($_POST['password']!= $_POST['re_password'])
{
    echo("Oops! Password did not match! Try again. ");
}else if ($_POST['password']== $_POST['re_password']){

  $password = $_POST['password'];


 // sql to create table
 // $sql = "CREATE TABLE `register_student` (
 //   `rollno` int(20) NOT NULL PRIMARY KEY,
 //   `name` varchar(100) NOT NULL,
 //   `fathername` varchar(100) NOT NULL,
 //   `email` varchar(100) NOT NULL,
 //   `mobile` varchar(16) NOT NULL,
 //   `course` varchar(100) NOT NULL,
 //   `gender` varchar(100) NOT NULL,
 //   `password` varchar(100) NOT NULL
 // )";
 //
 // if ($db->query($sql) === TRUE) {
 //     echo "Table student created successfully";
 // } else {
 //     echo "Error creating table: " . $db->error;
 // }

 // sql to insert data
 $sql="INSERT INTO register_student ( rollno, name, fathername, email, mobile, course, gender, password) VALUES('$rollno', '$name', '$fathername', '$email', '$phone', '$course', '$gender', '$password')";



 if ($db->query($sql) === TRUE) {


   header("Location:login-student.php?err=" . urlencode("Registration done!"));
   // header("Location: login.php");
 } else {
     echo "Error: " . $sql . "<br>" . $db->error;
     // header("Location: register.php");
     header("Location:register-student.php?err=" . urlencode("data not insert"));

 }
}
else{
  echo "bye";
}


 ?>
