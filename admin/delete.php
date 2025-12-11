<?php
include "../backend/delete.php";

$id = $_GET['id'];
deleteItem($id);

header("Location: dashboard.php");
exit();
?>
