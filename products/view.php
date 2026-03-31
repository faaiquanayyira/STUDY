<?php
require '../db.php';

// Fetch all products
$allProductsCursor = $products->find();
$allProducts = iterator_to_array($allProductsCursor); // Convert cursor to array
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Products</h2>
        <a href="add.php" class="btn btn-primary">Add Product</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <?php if (empty($allProducts)): ?>
                <p>No products found. <a href="add.php">Add one</a>.</p>
            <?php else: ?>
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Price (₹)</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allProducts as $product): ?>
                            <tr>
                                <td><?= htmlspecialchars($product['name']) ?></td>
                                <td><?= number_format($product['price'], 2) ?></td>
                                <td><?= (int)$product['stock'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $product['_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="delete.php?id=<?= $product['_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>