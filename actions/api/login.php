<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');
    if(!isset($_SESSION))
        session_start();

    if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $json_data = array();

        $resp = isLoginCorrect($email, $password);
        if($resp == true) {
            $json_data['error'] = false;
            $json_data['username'] = $resp['username'];
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $resp['username'];
        } else {
            $json_data['error'] = true;
            $json_data['message'] = "Invalid Login!";
        }
        echo json_encode($json_data);
    }
?>