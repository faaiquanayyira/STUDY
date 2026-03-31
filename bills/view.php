<?php
require '../db.php';

$billsData = $bills->find();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Bills</h2>
        <a href="create.php" class="btn btn-primary">Create Bill</a>
    </div>

    <?php foreach ($billsData as $bill): ?>
        <div class="card mb-3 shadow-sm">
            <div class="card-header bg-secondary text-white">
                Bill Date: <?= $bill['date'] ?> | Total: ₹<?= $bill['grand_total'] ?>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bill['items'] as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['name']) ?></td>
                                <td><?= $item['qty'] ?></td>
                                <td>₹<?= $item['price'] ?></td>
                                <td>₹<?= $item['total'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>