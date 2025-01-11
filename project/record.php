<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <title>Records</title>
</head>
<style>
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
                        <li class="nav-item"><a class="nav-link active" href="home_ele.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="add.html" id="add_new_item">Add Item</a></li>
                        <li class="nav-item active"><a class="nav-link" href="record.php">Records</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>