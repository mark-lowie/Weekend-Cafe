<?php
include "db_connect.php"; 

// Function to display a product
function display_product($row) {
    $default_image = "assets/images/default-image.jpg"; 
    $image_path = "../" . $row["image"]; 

    if (!file_exists($image_path)) { 
        $image_path = "../" . $default_image;
    }

    $discounted_price = $row["discounted_price"] !== null ? $row["discounted_price"] : "N/A";

    echo '<div class="w3-third">';
    echo '<div class="w3-card w3-margin w3-white">';
    echo '<form action="update_product.php" method="POST">';
    echo '<input type="hidden" name="id" value="' . htmlspecialchars($row["id"]) . '">';
    echo '<img class="w3-image" src="' . htmlspecialchars($image_path) . '" alt="' . htmlspecialchars($row["name"]) . '" style="width:100%; height:50vh">';
    echo '<div class="w3-container">';
    echo '<div class="w3-section">';
    echo '<label class="w3-large">Product Name</label>';
    echo '<input class="w3-input" type="text" name="name" value="' . htmlspecialchars($row["name"]) . '">';
    echo '</div>';
    echo '<div class="w3-section">';
    echo '<label class="w3-large">Product Price</label>';
    echo '<input class="w3-input" type="text" name="price" value="' . htmlspecialchars($discounted_price) . '">';
    echo '</div>';
    echo '<button type="submit" class="w3-margin-bottom w3-button w3-round-large w3-center w3-theme-up1 w3-hover-theme-up1">Update</button>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
}


$sql_drinks = "SELECT * FROM menu_items WHERE category = 'DRINKS'";
$result_drinks = $conn->query($sql_drinks);

if ($result_drinks->num_rows > 0) {
    while ($row = $result_drinks->fetch_assoc()) {
        display_product($row);
    }
} else {
    echo "No drinks available.";
}

$sql_food = "SELECT * FROM menu_items WHERE category = 'FOODS'";
$result_food = $conn->query($sql_food);

echo '<h2 class="w3-text-white" id="food" style="margin-bottom: 3rem; font-size: 3rem; font-family: Roboto;"></h2>';

if ($result_food->num_rows > 0) {
    while ($row = $result_food->fetch_assoc()) {
        display_product($row);
    }
} else {
    echo "No food items available.";
}
?>
