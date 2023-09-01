<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'user_database';

$connection = mysqli_connect($host, $username, $password, $db_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $message = $_POST["message"];

    $sql = "INSERT INTO users (first_name, last_name, email, mobile_number, message) VALUES ('$first_name', '$last_name',
     '$email', '$mobile_number', '$message')";

    if (mysqli_query($connection, $sql)) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
