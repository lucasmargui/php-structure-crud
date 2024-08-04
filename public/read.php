<?php
include '../includes/config.php';
include '../includes/functions.php';
include '../templates/header.php';

$id = $_GET['id'];
$user = getUser($pdo, $id);
?>

<h2>Read User</h2>
<p><strong>ID:</strong> <?= htmlspecialchars($user['id']) ?></p>
<p><strong>Name:</strong> <?= htmlspecialchars($user['name']) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>

<a href="index.php">Back to list</a>

<?php include '../templates/footer.php'; ?>