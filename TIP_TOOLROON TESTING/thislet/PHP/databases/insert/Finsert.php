<?php
include_once("TIP_TOOLROON TESTING\thislet\PHP\config.php")

// Connect to the faculty database
$facultyConnection = new mysqli($hostname, $username, $password, "faculty_db");
if ($facultyConnection->connect_error) {
    die("Faculty database connection failed: " . $facultyConnection->connect_error);
}

// User details
$facultyUsername = "faculty789";
$facultyPassword = "facultypass";
$facultyEmail = "faculty@example.com";

// Add user to the faculty table
$facultyQuery = "INSERT INTO faculty (username, password, email) VALUES ('$facultyUsername', '$facultyPassword', '$facultyEmail')";
if ($facultyConnection->query($facultyQuery) === TRUE) {
    echo "Faculty user added successfully.";
} else {
    echo "Error adding faculty user: " . $facultyConnection->error;
}

// Close the database connection
$facultyConnection->close();
?>
