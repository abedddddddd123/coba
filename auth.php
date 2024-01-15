<?php
include 'koneksi.php';

// Create
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_user'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    $conn->query($sql);
    // Redirect or display success message
}

// Read
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    // Display user data
}

// Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_user'])) {
    $id = $_POST['user_id'];
    $newUsername = $_POST['new_username'];

    $sql = "UPDATE users SET username = '$newUsername' WHERE id = $id";
    $conn->query($sql);
    // Redirect or display success message
}

// Delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE id = $id";
    $conn->query($sql);
    // Redirect or display success message
}
?>
