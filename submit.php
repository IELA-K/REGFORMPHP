<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "maindb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name= $_POST['name'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = $_POST['password'];
$region = $_POST['region'];
$state = $_POST['state'];
$city = $_POST['city'];
$barangay = $_POST['barangay'];
$zip = $_POST['zip'];
$gender = $_POST['gender'];
$addresstype = $_POST['addresstype'];
$resume = $_FILES['resume']['name'];
$veteranS = $_POST['veteranS'];
$disability = $_POST['disability'];
$race = $_POST['race'];
$terms_agree = isset($_POST['terms_agree']) ? $_POST['terms_agree'] : 0;

$stmt = $conn->prepare("INSERT INTO registration (name, birthdate, email, password, region, state, city, barangay, zip, gender, addresstype, resume, veteranS, disability, race, terms_agree) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssssss", $name, $birthdate, $email, $password, $region, $state, $city, $barangay, $zip, $gender, $addresstype, $resume, $veteranS, $disability, $race, $terms_agree);

if ($stmt->execute()) {
    echo "Data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: login.html");
exit;
?>
