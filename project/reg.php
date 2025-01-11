<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "project";

$conn = new mysqli($localhost, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit_register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "<script>
            alert('Please Enter both username and password');
            window.location.href = 'reg.php';
        </script>";
    } else {
        $stmt = $conn->prepare("SELECT username FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            echo "<script>
                window.location.href = 'index.php';
               alert('Username already ..!');

            </script>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
            
            if ($stmt) {
                $stmt->bind_param("ss", $username, $hashedPassword);

                if ($stmt->execute()) {
                    header("Location: index.php"); 
                           exit(); 
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
                }

                $stmt->close();
            } else {
                echo "<div class='alert alert-danger'>Failed to prepare the statement.</div>";
            }
        }
        $stmt->close();
    }
}
$conn->close();
?>
