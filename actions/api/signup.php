<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirmation']) &&
        isset($_POST['username']) && isset($_POST['phoneNumber']) && isset($_POST['birthDate']) &&
    !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirmation']) &&
    !empty($_POST['username']) && !empty($_POST['phoneNumber']) && !empty($_POST['birthDate'])) {
        $username = $_POST['username'];
        $birthDate = $_POST['birthDate'];
        $phoneNumber = $_POST['phoneNumber'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $resp = createUser($username, $name, $email, $password, $birthDate, $phoneNumber);
        echo json_encode($resp);
    }
?>