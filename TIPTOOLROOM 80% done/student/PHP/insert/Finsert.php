<?php
// Check if the form is submitted
// if this php is href change the `Submit` to the one that you place on the button
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $facultyID = $_POST['facultyID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Include database connection file
    // set the correct path of the file example: TIPTOOLROOM 80% done\student\PHP\config.php
    include_once("config.php");
    

    
    // Insert user data into the faculty table
    $facultyQuery = "INSERT INTO faculty (facultyID, firstName, lastName, address, department, email, password) 
                    VALUES ('$facultyID', '$firstName', '$lastName', '$address', '$department', '$email', '$password')";
    
    $result = $facultyConnection->query($facultyQuery);
    if ($result === TRUE) {
        echo "Faculty user added successfully.";
    } else {
        echo "Error adding faculty user.";
    }
    
    // Close the database connection
    $facultyConnection->close();
}
?>
