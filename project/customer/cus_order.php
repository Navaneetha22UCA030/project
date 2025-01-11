<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_name, brand, prices,`s.no` FROM stock_ele";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>
<style>
    #cardcenter {
        display: flex;
        margin: 20%;
    }

    #totaloftotaladditems {
        text-align: end;
    }

    #navitems {
        display: flex;
        position: fixed;
    }

    #responsive {
        background-color: aquamarine;
    }

    #onclicaddthetableinlist {
        display: flex;
        justify-content: end;
        align-items: end;
    }

    body {
        padding-top: 70px;
        padding-bottom: 70px;
        background-image: linear-gradient(to bottom, rgb(255, 136, 0), rgb(75, 47, 30));
    }
</style>

<body>



    <div class="container" id='additeamorders'>
        <table class="table table-bordered table-hover table-sm p-3" id="orderTable">
            <thead>
                <tr>
                    <th name='productName[]'>Product Name</th>
                    <th name='brand[]'>Brand</th>
                    <th name='price[]'>Price</th>
                    <th name='quantity[]'>Quantity</th>
                    <th name='quantity[]'>Total</th>
                  
                    <th name='total[]'>Remove</th>
                </th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <div class="col-lg-6 mt-5" id="totaloftotaladditem">
            <h5 id="totaloftotaladditems" class="h2">Total Amount: ₹0.00</h5>
        </div>

        <div class="container mt-5">
            <button id="saveOrderBtn" class="btn btn-primary clicktoshowcustomerform">Order Now</button>
        </div>
    </div>


    <div id="cardcenter" class="my-5">
        <form action="customer_ord_form.php" method="post">
            <div class="card" id="responsive">
                <div class="row p-3">

                <div class="col-lg-4">
                        <label>Date :<Span class="text-danger"> *</Span></label>
                        <input type="date" class="form-control" name="date[]" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Name :<Span class="text-danger"> *</Span></label>
                        <input type="text" class="form-control" name="name[]" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Name :<Span class="text-danger"> *</Span></label>
                        <input type="text" class="form-control" name="name[]" required>
                    </div>
                    <div class="col-lg-4">
                        <label>Email :<Span class="text-danger"> *</Span></label>
                        <input type="email" class="form-control" name="email[]" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Address :<Span class="text-danger"> *</Span></label>
                        <textarea type="address" class="form-control" name="address[]" required></textarea>
                    </div>

                    <div class="row" style="display:flex;justify-content: center;">
                        <div class="col-lg-2 p-3" id="foemsubmitbtncus">
                            <button class="btn btn-primary" id="submitalltodb" name="submit_form_cus_ord[]">Submit</button>
                        </div>
                    </div>

                </div>
        </form>
    </div>
    </div>

    <div class="container mt-5">
        <div class="card p-5">
            <div class="table-responsive">

                <div class="card-head">
                    <h1 class="h1">Eletrical produts</h1>
                </div>

                <div class="card-body">
                    <table class="table-bordered table-hover table-responsive p-3" id="myTable">
                        <thead class="table-bordered table-responsive">
                            <tr>
                                <th class='col-lg-1'>S.No</th>
                                <th class='col-lg-1'>Product Name</th>
                                <th class="col-lg-1">Brand</th>
                                <th class="col-lg-1">Price</th>
                                <th class="col-lg-1">Quantity</th>
                                <th class="col-lg-1">ADD Your Orders</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered table-responsive">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class=''>" . $row['s.no'] . "</td>";
                                    echo "<td class=''>" . $row["product_name"] . "</td>";
                                    echo "<td class=''>" . $row["brand"] . "</td>";
                                    echo "<td class=''>" . $row["prices"] . "</td>";
                                    echo "<td><div class='p-1'><input type='number' class='form-control quantity-input' id='qty-" . $row['s.no'] . "' placeholder='Quantity'></div></td>";
                                    echo "<td><div class='ms-5'><button class='btn xs-1 btn-success add-to-order'  id='addyouritesadd' data-id='" . $row['s.no'] . "' data-product='" . $row['product_name'] . "' data-brand='" . $row['brand'] . "' data-price='" . $row['prices'] . "'>ADD</button></div></td>";
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
            <div class="row" id="onclicaddthetableinlist">
                <div class="col-lg-4"><button class="btn btn-success" id='addbuttonaddinlist'>Show All</button></div>
            </div>
        </div>
    </div>

    <div class="container" id="formcustomers"></div>

    <div id="navitems">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electrical Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="cus_home.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="cus_order.php">
                                <h5>Orders</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                <h5>Contact</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });


        $(document).ready(function() {
            $("#additeamorders").hide();
        });
        $(document).ready(function() {
            $("#addbuttonaddinlist").click(function() {
                $("#additeamorders").show();
            });
        });

        
        $(document).ready(function() {
            $("#cardcenter").hide();
        });
        $(document).ready(function() {
            $("#addbuttonaddinlist").click(function() {
                $("#cardcenter").show();
            });
        });

        $(document).ready(function() {
            function updateTotalAmount() {
                var totalAmount = 0;

                $('#orderTable tbody tr').each(function() {
                    var total = parseFloat($(this).find('td').eq(4).text());
                    if (!isNaN(total)) {
                        totalAmount += total;
                    }
                });

                $('#totaloftotaladditem').html(`<h5>Total Amount: ₹${totalAmount.toFixed(2)}</h5>`);
            }

            $(document).on('click', '.add-to-order', function() {
                var productName = $(this).data('product');
                var brandname = $(this).data('brand');
                var price = $(this).data('price');
                var qty = $('#qty-' + $(this).data('id')).val().trim();

                if (qty === "" || isNaN(qty) || qty <= 0) {
                    alert("Please enter a valid quantity.");
                    return;
                }

                var total = (parseFloat(price) * parseInt(qty)).toFixed(2);

                var orderItem = `
            <tr>
                <td>${productName}</td>
                <td>${brandname}</td>
                <td>${price}</td>
                <td>${qty}</td>
                <td>${total}</td>
                <td><button class="btn btn-danger btn-sm remove-order">Remove</button></td>
            </tr>
        `;

                $('#orderTable tbody').append(orderItem);
                $('#qty-' + $(this).data('id')).val('');

                updateTotalAmount();
            });

            $(document).on('click', '.remove-order', function() {
                $(this).closest('tr').remove();
                updateTotalAmount();
            });

            $("#submitalltodb").click(function() {
                var orders = [];

                $('#orderTable tbody tr').each(function() {
                    var order = {
                        productName: $(this).find('td').eq(0).text(),
                        brand: $(this).find('td').eq(1).text(),
                        price: $(this).find('td').eq(2).text(),
                        quantity: $(this).find('td').eq(3).text(),
                        total: $(this).find('td').eq(4).text()
                    };
                    orders.push(order);
                });

                if (orders.length > 0) {
                    $.ajax({
                        url: 'save_order.php',
                        method: 'POST',
                        data: {
                            orders: JSON.stringify(orders)
                        },
                        success: function(response) {
                            alert(response);
                            $('#orderTable tbody').empty();
                            $('#additeamorders').hide();
                            $('#totaloftotaladditem').html('<h5>Total Amount: ₹0.00</h5>');
                        },
                        error: function(xhr, status, error) {
                            alert('Error saving order: ' + error);
                        }
                    });
                } else {
                    alert('No items in the order.');
                }
            });
        });

        $(document).ready(function() {
            $("#cardcenter").hide()
            $(".clicktoshowcustomerform").click(function() {
                $("#cardcenter").show();
            })
        })
    </script>


</body>

</html>