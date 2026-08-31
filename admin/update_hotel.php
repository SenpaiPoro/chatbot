<?php

require_once __DIR__ . '/../../configuration/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get values from JavaScript
    $id = $_POST['id'] ?? '';
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    // Validate ID
    if (!is_numeric($id)) {
        die("Invalid hotel ID.");
    }

    // Validate fields
    if ($title === '' || $description === '') {
        die("Title and description are required.");
    }

    // Convert ID to integer
    $id = (int) $id;

    // Update database
    $sql = "UPDATE hotels 
            SET title = ?, description = ?
            WHERE id = ?";

    $stmt = $connection->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $connection->error);
    }

    $stmt->bind_param("ssi", $title, $description, $id);

    if ($stmt->execute()) {
        echo "Hotel updated successfully.";
    } else {
        echo "Failed to update hotel: " . $stmt->error;
    }

    $stmt->close();

} else {

    echo "Invalid request.";

}

?>