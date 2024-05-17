<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (updateUser($id, $name, $email)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating user";
    }
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = $pdo->query("SELECT * FROM users WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "User not found";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
