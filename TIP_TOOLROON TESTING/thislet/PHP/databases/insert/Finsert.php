<?php
include_once("TIP_TOOLROON TESTING\thislet\PHP\config.php");
include_once("TIP_TOOLROON TESTING\thislet\PHP\databases\select\Fselect.php");

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
