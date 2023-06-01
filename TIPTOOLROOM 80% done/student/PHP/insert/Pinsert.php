<?php
// Check if the form is submitted
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $id_num = $_POST['id_num'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Include database connection file
    include_once("config.php");
    
    // Insert user data into the professors table
    $professorQuery = "INSERT INTO professors (id_num, first_name, last_name, address, age, department, email, password) 
                       VALUES ('$id_num', '$first_name', '$last_name', '$address', '$age', '$department', '$email', '$password')";
    
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
