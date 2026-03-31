<?php
require '../db.php';

$customerData = $customers->find();
$productData = $products->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2>Create Bill</h2>
        </div>
        <div class="card-body">
            <form action="save.php" method="POST">
                <div class="mb-3">
                    <label for="customer" class="form-label">Select Customer</label>
                    <select name="customer" id="customer" class="form-select" required>
                        <?php foreach ($customerData as $c): ?>
                            <option value="<?= $c['_id'] ?>"><?= htmlspecialchars($c['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <h3>Products</h3>
                <?php foreach ($productData as $p): ?>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" name="products[]" value="<?= $p['_id'] ?>" id="prod<?= $p['_id'] ?>">
                        <label class="form-check-label" for="prod<?= $p['_id'] ?>">
                            <?= htmlspecialchars($p['name']) ?> (₹<?= $p['price'] ?>)
                        </label>
                        <input type="number" name="qty[]" class="form-control w-auto d-inline ms-2" value="1" min="1">
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="btn btn-success mt-3">Create Bill</button>
                <a href="view.php" class="btn btn-secondary mt-3">View Bills</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>