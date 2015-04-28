<?php
    include_once('../../config/init.php');
    $json_data = array();

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        $smarty->clearAssign('USERNAME');

        $json_data['error'] = false;
    } else
        $json_data['error'] = true;

    echo json_encode($json_data);
?>