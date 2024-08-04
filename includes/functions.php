<?php
function getAllUsers($pdo) {
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUser($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createUser($pdo, $name, $email) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    return $stmt->execute([$name, $email]);
}

function updateUser($pdo, $id, $name, $email) {
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    return $stmt->execute([$name, $email, $id]);
}

function deleteUser($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    return $stmt->execute([$id]);
}
?>