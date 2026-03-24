<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
require '../db.php';

$products->insertOne([
  "name" => $_POST['name'],
  "price" => (int)$_POST['price'],
  "stock" => (int)$_POST['stock']
]);

header("Location: view.php");
?>