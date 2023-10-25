<?php
// Include your database connection configuration here
$hostname = "localhost";
$username = "root";
$password = "sri@123###12";
$database = "myd"; // The name of your database

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from the form
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert user data into the database
$sql = "INSERT INTO users (username, email, phone) VALUES ('$username', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript" style="margin-top:18%;">';
    echo 'alert("Register Suceesfully");';
    echo '</script>';
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
