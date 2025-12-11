<?php
include "../backend/db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM items WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>

<h2>Edit Item</h2>

<form action="../backend/save.php" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo $data['title']; ?>" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?php echo $data['description']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
