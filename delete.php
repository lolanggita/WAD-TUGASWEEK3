<?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM product WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>