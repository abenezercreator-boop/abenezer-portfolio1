<?php

include "dbconn.php";

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $sql = "INSERT INTO contact_messages (name, email, subject, message)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Query Preparation Failed: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<h2>Message sent successfully!</h2><br>";
        echo "<a href='index.php#contact'>Send Another Message</a>";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Please submit the form first.";
}

?>