<?php
// Check if the form is submitted
// if this php is href change the `Submit` to the one that you place on the button
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $studentID = $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $program = $_POST['program'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $password = $_POST['password'];
    
    // Include database connection file
    // set the correct path of the file example: TIPTOOLROOM 80% done\student\PHP\config.php
    include_once("config.php");
    
    
    // Insert user data into the student table
    $studentQuery = "INSERT INTO student (studentID, firstName, lastName, address, program, email, year, password) 
                     VALUES ('$studentID', '$firstName', '$lastName', '$address', '$program', '$email', '$year', '$password')";
    
	$result = $studentConnection->query($studentQuery);
    if ($result === TRUE) {
        echo "Student added successfully.";
    } else {
        echo "Error adding student.";
    }
    
    // Close the database connection
    $studentConnection->close();
}
?>
