<?php
include 'config.php';

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['stock']."</td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No data Found</td></tr>";
}
?>
