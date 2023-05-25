<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
 

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

// Perform operations on the databases

// Perform a SELECT query on the students table
$query = "SELECT * FROM students";
$result = $studentConnection->query($query);

// Process the result set
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Access individual fields
        $id_num = $_POST['id_num'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_namr'];
		$address = $_POST['address'];
		$program = $_POST['program'];
		$email = $_POST['email'];
		$year = $_POST['year'];

        // Perform further processing
        // ...
    }
} else {
    echo "No records found.";
}

// Free the result set
$result->free_result();




// Close the database connections
$studentConnection->close();
$professorConnection->close();
$facultyConnection->close();

?>
