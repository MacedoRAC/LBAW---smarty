<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/questions.php');


    if(isset($_POST['text']) && isset($_POST['userID']) && isset($_POST['tags'])) {
        $questionText = $_POST['text'];
        $userID = $_POST['userID'];
        $tags = $_POST['tags'];

        $resp = insertQuestion($questionText, $userID, $tags);
        echo json_encode($resp);
    } else {
        $data = array();
        $data['success'] = false;
        echo json_encode($data);
    }
?>