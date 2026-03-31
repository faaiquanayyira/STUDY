<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Add Product</h2>
        </div>
        <div class="card-body">
            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price (₹)</label>
                    <input type="number" id="price" name="price" class="form-control" min="0" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock Quantity</label>
                    <input type="number" id="stock" name="stock" class="form-control" min="0" required>
                </div>
                <button type="submit" class="btn btn-success">Add Product</button>
                <a href="view.php" class="btn btn-secondary">View Products</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>