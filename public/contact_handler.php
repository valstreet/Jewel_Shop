<?php
// contact_handler.php
require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php'; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate the input
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all the fields."]);
        exit;
    }

    // Insert into the database
    try {
        $stmt = $conn->prepare("INSERT INTO contact_inquiries (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        echo json_encode(["status" => "success", "message" => "Thank you for contacting us, $name. We will get back to you soon."]);
    } catch(PDOException $e) {
        echo json_encode(["status" => "error", "message" => "An error occurred. Please try again later."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>
