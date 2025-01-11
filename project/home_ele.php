<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT date, product_name, price, quantity,gst,perone,total, company_name, brand, `s.no` FROM stock_ele";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

</head>

<style>
    #submitbtntoaddindb {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    #additembtnnewform {
        display: flex;
        justify-content: end;
    }
    body {
        padding-top: 70px;
        padding-bottom: 70px;
        background-image: linear-gradient(to bottom, rgb(255, 136, 0), rgb(75, 47, 30));
    }

</style>
<body>

    <div id="navitems">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electrical Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="home_ele.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add.html" id="add_new_item">Add Item</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="record.php">Records</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="order.php">Orders</a>
                        </li>   
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="card p-3">
            <div class="table-responsive">
                <table class="table-bordered table-hover table-responsive" id="myTable">
                    <thead class="table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>GST</th>
                            <th>Per One</th>
                            <th>Total</th>
                            <th>Company Name</th>
                            <th>Brand</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered table-responsive">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['s.no'] . "</td>";
                                echo "<td>" . $row["date"] . "</td>";
                                echo "<td>" . $row["product_name"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "<td>" . $row["quantity"] . "</td>";
                                echo "<td>" . $row["gst"] . "</td>";
                                echo "<td>" . $row["perone"] . "</td>";
                                echo "<td>" . $row["total"] . "</td>";
                                echo "<td>" . $row["company_name"] . "</td>";
                                echo "<td>" . $row["brand"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No products found</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>