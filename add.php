<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <button class="btn" onclick="window.location.href='index.php'">Home</button>
        <br><br>
        <h1>Add Product</h1>
        <form action="add.php" method="post" name="addForm">
            <table id="dataForm1">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><input type="text" name="type"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="text" name="stock"></td>
                </tr>
                <tr>
                    <td></td>
                    <button class="btn" type="Submit" name="Submit" value="Add">Add</button>
                </tr>
            </table>
        </form>

        <?php

        // Checked the form when Submit button is clicked
        if(isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];

            include_once("config.php");

            $result = mysqli_query($conn, "INSERT INTO product(name, type, price, stock) VALUES ('$name', '$type', '$price', '$stock')");

            echo "Product added successfully.";
        }
        ?>
    </div>
</body>
</html>
