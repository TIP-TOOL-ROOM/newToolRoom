<?php
// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $id_num = $_POST['id_num'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $program = $_POST['program'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $password = $_POST['password'];
    
    // Include database connection file
    include_once("C:\Users\johnr\Documents\GitHub\TOOLv.2\TIP_TOOLROON TESTING\thislet\PHP\config.php");
    
    
    // Insert user data into the student table
    $studentQuery = "INSERT INTO student (id_num, first_name, last_name, address, program, email, year, password) 
                     VALUES ('$id_num', '$first_name', '$last_name', '$address', '$program', '$email', '$year', '$password')";
    
	$result = $studentConnection->query($studentQuery);
    if ($result === TRUE) {
        echo "Student added successfully.";
    } else {
        echo "Error adding student: " . $studentConnection->error;
    }
    
    // Close the database connection
    $studentConnection->close();
}
?>
