<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form For order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
</head>
<style>
body {
        padding-top: 70px;
        padding-bottom: 70px;
        background-image: linear-gradient(to bottom, rgb(255, 136, 0), rgb(75, 47, 30));
    }
    </style>

<body>
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
</body>

</html>