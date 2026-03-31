<?php
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customers->insertOne([
        "name" => $_POST['name'],
        "phone" => $_POST['phone'],
        "city" => $_POST['city']
    ]);

    header("Location: view.php");
    exit();
}
?>