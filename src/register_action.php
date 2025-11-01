<?php
$servername = "group1_db";
$username = "root";
$password = "root";
$dbname = "group1_shareride_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$gender    = $_POST['gender'];
$email     = $_POST['email'];
$pass      = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password)
        VALUES ('$firstname', '$lastname', '$gender', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
