<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$db = $client->billingDB;

$customers = $db->customers;
$products = $db->products;
$bills = $db->bills;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">