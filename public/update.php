<?php
include '../includes/config.php';
include '../includes/functions.php';
include '../templates/header.php';

$id = $_GET['id'];
$user = getUser($pdo, $id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if (updateUser($pdo, $id, $name, $email)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error updating user.";
    }
}
?>

<h2>Update User</h2>
<form method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    <button type="submit">Update</button>
</form>

<?php include '../templates/footer.php'; ?>