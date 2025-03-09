<!-- MAIN CONTENT -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEKTEL STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Product</h1>
        <table id="dataTable">
            <thead>
                <tr>
                    <th class="titel">ID</th>
                    <th class="titel">NAME</th>
                    <th class="titel">TYPE</th>
                    <th class="titel">PRICE</th>
                    <th class="titel">STOCK</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
        <button class="btn" onclick="window.location.href='add.php'">Add Product</button>
    </div>
</body>
</html>