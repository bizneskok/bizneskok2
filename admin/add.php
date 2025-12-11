<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New</title>
</head>
<body>

<h2>Add New Item</h2>

<form action="../backend/save.php" method="POST">
    <input type="hidden" name="action" value="add">

    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
