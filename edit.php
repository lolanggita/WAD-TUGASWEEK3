<?php
    include 'config.php';

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        die("Invalid or missing ID parameter.");
    }

    $id = $_GET['id'];

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $stmt = $conn->prepare("UPDATE product SET name=?, type=?, price=?, stock=? WHERE id=?");
        $stmt->bind_param("ssdii", $name, $type, $price, $stock, $id);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    }

    $sql = "SELECT id, name, type, price, stock FROM product WHERE id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $product_data = $result->fetch_assoc();
    } else {
        die("Product not found.");
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <button class="btn" onclick="window.location.href='index.php'">Home</button>
        <br><br>
        <h1>Edit Product</h1>
        <form action="edit.php?id=<?php echo $id; ?>" method="post" name="updateForm">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $product_data['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input type="text" name="type" value<?php echo $product_data['type']; ?>></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value<?php echo $product_data['price']; ?>></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="text" name="stock" value<?php echo $product_data['stock']; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $product_data['id']; ?>"></td>
                    <button class="btn" type="Submit" name="update" value="update">Update</button>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>