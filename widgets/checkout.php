<?php
// Set the content type header to JSON
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weekendcafe";

// Initialize response array
$response = ["success" => false];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $response["error"] = "Connection failed: " . $conn->connect_error;
} else {

    $cart = json_decode(file_get_contents('php://input'), true);

    if (!empty($cart)) {
        $conn->begin_transaction();

        try {
            $stmt = $conn->prepare("INSERT INTO cart_items (menu_item_id, name, price, image, quantity) VALUES (?, ?, ?, ?, 1)");

            $stmt->bind_param("isds", $menu_item_id, $name, $price, $image);

            foreach ($cart as $item) {
                $menu_item_id = $item['id'];
                $name = $item['name'];
                $price = $item['price'];
                $image = $item['image'];

    
                if (!$stmt->execute()) {
                    throw new Exception("Execute failed: " . htmlspecialchars($stmt->error));
                }
            }

       
            $conn->commit();
            $response["success"] = true;
        } catch (Exception $e) {
            $conn->rollback();
            $response["error"] = $e->getMessage();
        } finally {
            $stmt->close();
        }
    } else {
        $response["error"] = "Cart is empty.";
    }


    $conn->close();
}

// Return the response as JSON
echo json_encode($response);
?>
