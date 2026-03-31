<?php
require '../db.php';

use MongoDB\BSON\ObjectId;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Convert the string ID to a MongoDB ObjectId
        $products->deleteOne(['_id' => new ObjectId($id)]);
        header("Location: view.php");
        exit();
    } catch (Exception $e) {
        echo "Error deleting product: " . $e->getMessage();
    }
} else {
    echo "No product ID provided. <a href='view.php'>Go Back</a>";
}
?>