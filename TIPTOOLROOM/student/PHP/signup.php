<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $firstName . ' ' . $lastName;
    $_SESSION['studentID'] = $studentID;
    $_SESSION['program'] = $program;

    // Perform necessary validation and database operations to store the user's information

    // Redirect to the testingaccount.html page after successful sign-up
    header("Location: testingaccount.html");
    exit();
}
?>
