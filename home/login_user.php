<?php
include("connection.php");

if(isset($_POST['btn'])) {
    $username = $_POST['stu_email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM students WHERE stu_email = '$username' AND stu_password = '$password'";

    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);

    if ($user)
    {
        session_start();

        $_SESSION['user_id'] = $user['stu_id'];

        header('Location: ../home/');
    }
    else
    {
        header('Location: ../home/');
    }

}

?>