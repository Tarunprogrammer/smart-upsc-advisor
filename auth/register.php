<?php
require '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['email'], $pass]);
    header("Location: login.php");
}
?>
<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Join the Academy</button>
</form>