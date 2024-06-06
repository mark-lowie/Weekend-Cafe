<?php
// update_product.php

include "db_connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $discounted_price = $_POST['price'];  

    $sql_update = "UPDATE menu_items SET name = ?, discounted_price = ? WHERE id = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ssi", $name, $discounted_price, $id);

    if ($stmt->execute()) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    
    header("Location: product_management.php");
    exit();
}
$conn->close();
?>
