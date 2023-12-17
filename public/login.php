<?php

require_once 'C:\xampp\htdocs\Jewel_Shop\templates\config.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\init_twig.php';
require_once 'C:\xampp\htdocs\Jewel_Shop\vendor\autoload.php';

use Google\Client as GoogleClient;

session_start();

// Check if it's a Google Sign-In
if (isset($_POST['idToken'])) {
    $client = new GoogleClient(['client_id' => '765846073050-qifj314fhshbodk74ed02l14u7tr1bnk.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($_POST['idToken']);

    if ($payload) {
        $userid = $payload['sub'];
        $email = $payload['email'];
        $username = isset($payload['name']) ? $payload['name'] : explode('@', $email)[0];

        $stmt = $conn->prepare("SELECT user_id, username FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
        } else {
            $insertStmt = $conn->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
            $insertStmt->bindParam(':username', $username);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->execute();

            $_SESSION['user_id'] = $conn->lastInsertId();
            $_SESSION['username'] = $username;
        }

        echo 'Google login successful, redirecting...';
    } else {
        echo 'Invalid ID token';
    }
} elseif (isset($_POST['email']) && isset($_POST['password'])) {
    // Traditional email/password login
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            echo 'Login successful, redirecting...';
                setcookie("username", $row['username'], time() + 86400, "/"); // 86400 = 1 day
        } else {
            echo 'Invalid password';
        }
    } else {
        echo 'User not found';
    }
}

?>
