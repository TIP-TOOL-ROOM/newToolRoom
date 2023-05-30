<?php
<<<<<<< HEAD

// User details
$facultyEmail = 'email';
$facultyUsername = $FacultyEmail;
$facultyPassword = 'password';
=======
include_once("TIP_TOOLROON TESTING\thislet\PHP\config.php");
include_once("TIP_TOOLROON TESTING\thislet\PHP\databases\select\Fselect.php");
>>>>>>> 6a1baa648d8dae69d0e9d9bb012143f15e098596

// Add user to the faculty table
$facultyQuery = "INSERT INTO faculty (username==email, password, email) VALUES ('$facultyUsername', '$facultyPassword', '$facultyEmail')";
if ($facultyConnection->query($facultyQuery) === TRUE) {
    echo "Faculty user added successfully.";
} else {
    echo "Error adding faculty user: " . $facultyConnection->error;
}

// Close the database connection
$facultyConnection->close();
?>
