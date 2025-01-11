<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
    $orders = json_decode($_POST['orders'], true); 
    for ($i = 0; $i < count($orders); $i++) {
        $productName = $orders[$i]['productName'];
        $brand = $orders[$i]['brand'];
        $price = $orders[$i]['price'];
        $quantity = $orders[$i]['quantity'];
        $total = $orders[$i]['total'];
        $date = $orders[$i]['date'];
        $Name = $orders[$i]['name'];
        $phoneno = $orders[$i]['phone_no'];
        $email = $orders[$i]['email'];
        $address = $orders[$i]['address'];

        $sql = "INSERT INTO orders (product_name, brand, price, quantity, total) 
                VALUES ('$productName', '$brand', '$price', '$quantity', '$total')";

        if (!$conn->query($sql)) {
            echo "Error: " . $conn->error;
        }
    }

    echo "Order saved successfully!";
}

$conn->close();
?>
