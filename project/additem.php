<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
    
    $dates = $_POST['date'];
    $product_names = $_POST['product_name'];
    $prices = $_POST['price'];
    $quantities = $_POST['quantity'];
    $gst = $_POST['gst'];
    $perone = $_POST['perone'];
    $salesprice=$_POST['prices'];
    $totals = $_POST['total'];
    $company_names = $_POST['company_name'];
    $brands = $_POST['brand'];
    
    $sql = "INSERT INTO stock_ele (date, product_name, price, quantity, gst, perone, prices ,total, company_name, brand) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error preparing statement: " . $conn->error;
        exit();
    }

    $stmt->bind_param("ssdiiidiss", $date, $product_name, $price, $quantity, $gst_value,$perone,$salesprice, $total, $company_name, $brand);

    $success = true;
    for ($i = 0; $i < count($dates); $i++) {
        $date = $dates[$i];
        $product_name = $product_names[$i];
        $price = $prices[$i];
        $quantity = $quantities[$i];
        $gst_value = $gst[$i];
        $perone=$perone[$i];
        $salesprice=$salesprice[$i];
        $total = $totals[$i];
        $company_name = $company_names[$i];
        $brand = $brands[$i];

        if (!$stmt->execute()) {
            $success = false;
            echo "Error inserting record: " . $stmt->error;
        }
    }

    $stmt->close();

    if ($success) {
        echo "<script>
                alert('Records added successfully!');
                window.location.href = 'add.html';
              </script>";
    }
} else {
    echo "<script>
            alert('No data received. Please submit the form.');
            window.location.href = 'add.html';
          </script>";
}

$conn->close();
?>
