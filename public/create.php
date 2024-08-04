<?php
include '../includes/config.php';
include '../includes/functions.php';
include '../templates/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if (createUser($pdo, $name, $email)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error creating user.";
    }
}
?>

<h2>Create User</h2>
<form method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Create</button>
</form>

<?php include '../templates/footer.php'; ?>