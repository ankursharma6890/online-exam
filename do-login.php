<?php include('server.php');

$code=$_POST['code'];
$password=$_POST['password'];
$password=$_POST['password'];

$rollno=$_POST['rollno'];




if($_POST['dropdown'] == 'teacher')
{
$query=mysqli_query($db,"SELECT * FROM `exam` WHERE `userid`='$_POST[code]'  AND `password`=$password") or die(mysqli_error($db));;
         // echo "Invalid username or password";


    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==true)
    {
        $_SESSION['code'] = $_POST['code'];
        $_SESSION['password'] = $_POST['password'];
        // echo "Invalid username or password";
        header("Location: teacher-dashboard.php");
        exit();

        // header("location: ../view.php");
        }
    else
    {
      header("Location:login-student.php?err=" . urlencode("enter correct details"));
        }
}

else if($_POST['dropdown'] == 'student'){
  $query=mysqli_query($db,"SELECT * FROM `register_student` WHERE `rollno`='$_POST[rollno]'  AND `password`=$password") or die(mysqli_error($db));;
           // echo "Invalid username or password";


      $count=mysqli_num_rows($query);
      $row=mysqli_fetch_array($query);

      if ($count==true)
      {
          $_SESSION['rollno'] = $_POST['rollno'];
          $_SESSION['password'] = $_POST['password'];
          // echo "Invalid username or password";
          header("Location: student-view.php");
          exit();

          // header("location: ../view.php");
          }
      else
      {
        header("Location:login-student.php?err=" . urlencode("enter correct details"));
          }

}

else{
  header("Location:login-student.php?err=" . urlencode("enter correct details"));

}
?>
