<?php
include 'db.php';

function getUsers() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createUser($name, $email) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    return $stmt->execute([$name, $email]);
}

function updateUser($id, $name, $email) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    return $stmt->execute([$name, $email, $id]);
}

function deleteUser($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    return $stmt->execute([$id]);
}
?>
