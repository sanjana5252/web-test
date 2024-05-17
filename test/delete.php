<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (deleteUser($id)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting user";
        }
    } else {
        echo "User not found";
    }
}
?>
