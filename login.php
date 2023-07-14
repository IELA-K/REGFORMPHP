<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "maindb";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    echo "<script>alert('Login succesfully!');</script>";
    echo "<script>window.location.href = 'login.html';</script>";
    exit();
  } else {
    echo "<script>alert('Invalid username or password');</script>";
    echo "<script>window.location.href = 'login.html';</script>";
    exit();
    exit();
  }
}
?>