<?php
include '../includes/config.php';
include '../includes/functions.php';
include '../templates/header.php';

$users = getAllUsers($pdo);
?>

<h2>User List</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['name']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td>
            <a href="read.php?id=<?= $user['id'] ?>">Read</a>
            <a href="update.php?id=<?= $user['id'] ?>">Update</a>
            <a href="delete.php?id=<?= $user['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include '../templates/footer.php'; ?>