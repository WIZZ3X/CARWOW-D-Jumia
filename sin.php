<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = SQLite3::escapeString($_POST['username']);
    $password = $_POST['password'];

    $result = $db->querySingle("SELECT password_hash FROM users WHERE username='$username'", true);
    
    if ($result && password_verify($password, $result['password_hash'])) {
        $_SESSION['user'] = $username;
        header("Location: cwj_main.html");
    } else {
        echo "Invalid credentials!";
    }
}
?>