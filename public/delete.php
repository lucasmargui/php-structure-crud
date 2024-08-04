<?php
include '../includes/config.php';
include '../includes/functions.php';

$id = $_GET['id'];

if (deleteUser($pdo, $id)) {
    header('Location: index.php');
    exit();
} else {
    echo "Error deleting user.";
}
?>