<?php include('server.php');

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($db,"SELECT * FROM `users` WHERE `username`='$_POST[username]' AND `status`='active' AND `password`=PASSWORD($password") or die(mysqli_error($db));;
header("Location: view.php");

//
//     $count=mysqli_num_rows($query);
//     $row=mysqli_fetch_array($query);
//
//     if ($count==true)
//     {
//         $_SESSION['username'] = $_POST['username'];
//         $_SESSION['password'] = $_POST['password'];
//         // echo "Invalid username or password";
//         header("Location: view.php");
//         exit();
//
//         // header("location: ../view.php");
//         }
//     else
//     {
//         echo "Invalid username or password";
//         }

?>
