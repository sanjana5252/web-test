<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
</head>
<body>
    <h2>Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'functions.php';
        $users = getUsers();
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td><a href='edit.php?id={$user['id']}'>Update</a> | <a href='delete.php?id={$user['id']}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
