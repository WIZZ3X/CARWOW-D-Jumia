<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = SQLite3::escapeString($_POST['username']);
    $email = SQLite3::escapeString($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password)");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);

    if ($stmt->execute()) {
        $_SESSION['user'] = $username;
        header("Location: cwj_main.html");
    } else {
        echo "Registration failed!";
    }
}
?>