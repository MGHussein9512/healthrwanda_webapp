<?php
session_start();

$servername = "group1_db";
$username = "root";
$password = "root";
$dbname = "group1_shareride_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$email = $_POST['email'];
$pass  = $_POST['password'];

$sql = "SELECT * FROM tbl_users WHERE user_email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($pass, $user['user_password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}
?>
