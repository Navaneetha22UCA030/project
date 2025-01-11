<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = new mysqli($localhost, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if (isset($_POST['submit_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'nava' && $password === 'navaneetha') {
        echo "<script>
            window.location.href='home_ele.php'; 
        </script>";
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            echo "<script>
                window.location.href='customer/cus_home.php';  
            </script>";
        } else {
            echo "<script>
                alert('Invalid password');
                window.location.href = 'index.php';     
            </script>";
        }
    } else {
        echo "<script>
            alert('Invalid username');
            window.location.href = 'index.php';
        </script>";
    }

    $stmt->close();
}

$conn->close();
