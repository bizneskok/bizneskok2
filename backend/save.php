<?php
include "db.php";

$action = $_POST['action'];

$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

if ($action == "add") {

    $sql = "INSERT INTO items (title, description) VALUES ('$title', '$description')";
    mysqli_query($conn, $sql);

    header("Location: ../admin/dashboard.php");
    exit();

}

if ($action == "edit") {

    $id = $_POST['id'];

    $sql = "UPDATE items 
            SET title='$title', description='$description'
            WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location: ../admin/dashboard.php");
    exit();

}
?>
