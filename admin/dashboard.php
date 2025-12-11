<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>

<h2>Welcome to Admin Panel</h2>

<a href="add.php">+ Add New Content</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
