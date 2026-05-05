<?php
include "connect.php";

if(isset($_POST['submit'])){

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
}
?>