<?php
// Check if the form is submitted
// if this php is href change the `Submit` to the one that you place on the button
if (isset($_POST['Submit'])) {
    // Retrieve form data
    $itemID = $_POST['itemID'];
    $itemName = $_POST['itemName'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    
    // Include database connection file
    // set the correct path of the file example: TIPTOOLROOM 80% done\student\PHP\config.php
    include_once("config.php");
    
    // Insert item data into the items table
    $itemQuery = "INSERT INTO items (itemID, itemName, description, quantity, category) 
                  VALUES ('$itemID', '$itemName', '$description', '$quantity', '$category')";
    
    $result = $itemsConnection->query($itemQuery);
    if ($result === TRUE) {
        echo "Item added successfully.";
    } else {
        echo "Error adding item.";
    }

     // Close the database connection
     $itemsConnection->close();
}
?>
