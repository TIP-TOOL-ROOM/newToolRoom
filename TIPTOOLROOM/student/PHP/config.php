<?php
/**
 * using mysqli_connect for database connection
 */

$hostname = 'localhost';
$username = 'root';
$password = '';

// Connect to the student database
$studentConnection = new mysqli($hostname, $username, $password, "student_db");
if ($studentConnection->connect_error) {
    die("Student database connection failed: " . $studentConnection->connect_error);
}

// Connect to the professor database
$professorConnection = new mysqli($hostname, $username, $password, "professor_db");
if ($professorConnection->connect_error) {
    die("Professor database connection failed: " . $professorConnection->connect_error);
}

// Connect to the faculty database
$facultyConnection = new mysqli($hostname, $username, $password, "faculty_db");
if ($facultyConnection->connect_error) {
    die("Faculty database connection failed: " . $facultyConnection->connect_error);
}

// Connect to the items database
$itemsConnection = new mysqli($hostname, $username, $password, "item_db");
if ($itemsConnection->connect_error) {
    die("Items database connection failed: " . $itemsConnection->connect_error);
}

// Perform operations on the databases

// Close the database connections
$studentConnection->close();
$professorConnection->close();
$facultyConnection->close();
$itemsConnection->close();

?>