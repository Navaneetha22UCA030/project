<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = new mysqli($localhost, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if (isset($_POST['submit_form_cus_ord'])) {
    if (!empty($_POST['date']) && !empty($_POST['name']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['address'])) {

        for ($i = 0; $i < count($_POST['date']); $i++) {
            $date = mysqli_real_escape_string($conn, $_POST['date'][$i]);
            $name = mysqli_real_escape_string($conn, $_POST['name'][$i]);
            $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no'][$i]);
            $email = mysqli_real_escape_string($conn, $_POST['email'][$i]);
            $address = mysqli_real_escape_string($conn, $_POST['address'][$i]);

            $sql = "INSERT INTO orders(date, name, phone_no, email, address) 
                    VALUES ('$date', '$name', '$phone_no', '$email', '$address')";

            if ($conn->query($sql) === TRUE) {
                   
                echo "<script> alert ('New record created successfully for');
                </script>";
                echo "<script>
                 window.location.href ='cus_order.php'
                 </script>";
              
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
            }
        }
    } else {
        echo "Some required fields are missing. Please fill out all the fields.<br>";
    }
}


$conn->close();
