<?php
include("connection.php");

if(isset($_POST['btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);

    if ($user)
    {
        session_start();

        $_SESSION['id'] = $user['id'];

        header('Location: ../admin/');
    }
    else
    {
        header('Location: ../home/');
    }

}

?>