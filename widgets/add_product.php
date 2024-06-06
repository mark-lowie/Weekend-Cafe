<?php
include "db_connect.php"; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $discounted_price = $_POST['original_price'];
    $category = $_POST['category'];

    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $relative_path = "assets/images/" . basename($_FILES["image"]["name"]);

    // Move the uploaded file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql_insert = "INSERT INTO menu_items (name, original_price, category, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bind_param("siss", $name, $discounted_price, $category, $relative_path);

        if ($stmt->execute()) {
            echo "Product added successfully.";
        } else {
            echo "Error adding product: " . $conn->error;
        }

        $stmt->close();
        $conn->close();

        header("Location: ../widgets/product_management.php");
        exit();
    } else {
        echo "Error uploading image.";
    }
}
?>
