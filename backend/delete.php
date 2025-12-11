<?php
include "db.php";

function deleteItem($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM items WHERE id=$id");
}
?>
