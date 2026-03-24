<?php
require '../db.php';

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

$customers->insertOne([
  "name" => $_POST['name'],
  "phone" => $_POST['phone'],
  "city" => $_POST['city']
]);

header("Location: view.php");
?>