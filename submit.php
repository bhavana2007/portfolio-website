<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)){
        header("Location: index.html?success=1");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    // If someone tries to open submit.php directly
    header("Location: index.html");
    exit();
}
?>