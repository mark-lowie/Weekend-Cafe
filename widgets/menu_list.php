<?php

include "db_connect.php";

?>

<?php

$sql_drinks = "SELECT * FROM menu_items WHERE category = 'DRINKS'";
$result_drinks = $conn->query($sql_drinks);

// Display drink items
if ($result_drinks->num_rows > 0) {
    while ($row = $result_drinks->fetch_assoc()) {
        echo '<div class="w3-third">';
        echo '<div class="w3-card w3-margin w3-white">';
        echo '<img class="w3-image" src="' . $row["image"] . '" alt="' . $row["name"] . '" style="width:100%; height:60vh">';
        echo '<div class="w3-container">';
        echo '<h4>' . $row["name"] . '</h4>';
        echo '<p><s class="w3-padding-right w3-text-grey">₱' . $row["original_price"] . '</s> ₱' . $row["discounted_price"] . '</p>';
        echo '<button class="w3-margin-bottom w3-button w3-theme-d1 w3-round-large w3-hover-theme padding-bottom-16 card-button w3-center" onclick="addToCart(this, ' . $row['id'] . ')">Order Now</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No drinks available.";
}

$sql_food = "SELECT * FROM menu_items WHERE category = 'FOODS'";
$result_food = $conn->query($sql_food);

// Display food items
if ($result_food->num_rows > 0) {
    while ($row = $result_food->fetch_assoc()) {
        echo '<div class="w3-third">';
        echo '<div class="w3-card w3-margin w3-white">';
        echo '<img class="w3-image" src="' . $row["image"] . '" alt="' . $row["name"] . '" style="width:100%; height:60vh">';
        echo '<div class="w3-container">';
        echo '<h4>' . $row["name"] . '</h4>';
        echo '<p><s class="w3-padding-right w3-text-grey">₱' . $row["original_price"] . '</s> ₱' . $row["discounted_price"] . '</p>';
        echo '<button class="w3-margin-bottom w3-button w3-theme-d1 w3-round-large w3-hover-theme padding-bottom-16 card-button w3-center" onclick="addToCart(this, ' . $row['id'] . ')">Order Now</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No food items available.";
}
?>



