
<?php

require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\vendor\autoload.php';

use Google\Client as GoogleClient;

session_start();

if (isset($_POST['idToken'])) {
    // Google Sign-In
    $client = new GoogleClient(['client_id' => '765846073050-qifj314fhshbodk74ed02l14u7tr1bnk.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($_POST['idToken']);

    if ($payload) {
        $userid = $payload['sub']; // The user's ID from Google
        $email = $payload['email'];

        // Use email as username if name is not available
        $username = isset($payload['name']) ? $payload['name'] : explode('@', $email)[0];

        // Check if user already exists in database
        $stmt = $conn->prepare("SELECT user_id, username FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // User exists, set session
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
        } else {
            // User does not exist, create new user
            $insertStmt = $conn->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
            $insertStmt->bindParam(':username', $username);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->execute();

            $newUserId = $conn->lastInsertId();
            $_SESSION['user_id'] = $newUserId;
            $_SESSION['username'] = $username;
        }

        echo 'Google login successful, redirecting...';
    } else {
        echo 'Invalid ID token';
    }
}

?>