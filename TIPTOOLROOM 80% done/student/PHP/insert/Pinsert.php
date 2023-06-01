<?php
// Check if the form is submitted
// if this php is href change the `Submit` to the one that you place on the button
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $professorsID = $_POST['professorsID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Include database connection file
    // set the correct path of the file example: TIPTOOLROOM 80% done\student\PHP\config.php
    include_once("config.php");
    
    // Insert user data into the professors table
    $professorQuery = "INSERT INTO professors (professorsID, firstName, lastName, address, department, email, password) 
                       VALUES ('$professorsID', '$firstName', '$lastName', '$address', '$department', '$email', '$password')";
    
    $result = $professorConnection->query($professorQuery);
    if ($result === TRUE) {
        echo "Professor added successfully.";
    } else {
        echo "Error adding professor.";
    }
    
    // Close the database connection
    $professorConnection->close();
}
?>
