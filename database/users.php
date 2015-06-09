<?php
    include_once($BASE_DIR . 'config/init.php');


    function createUser($username, $name, $email, $password, $birthDate, $phoneNumber) {
        global $conn;
        $data = array();

        $alreadyResgistered = emailAlreadyRegisted($email);
        if($alreadyResgistered) {
            $data['error'] = true;
            $data['message'] = "There is a user registered with that email address!";
            return $data;
        } else {
            $stmt = $conn->prepare("INSERT INTO autenticado (username, password, nome, nascimento, email, telefone, banned, avatarurl) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            if($stmt->execute(array($username, sha1($password), $name, $birthDate, $email, $phoneNumber, 'FALSE', 'C:\Users\%'))) {
                $data['error'] = false;
            } else {
                $data['error'] = true;
                $data['message'] = "Something went wrong while signing you up!";
            }
            return $data;
        }
    }


    function emailAlreadyRegisted($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM autenticado WHERE email = ?");
        $stmt->bindValue(1, $email);
        $stmt->execute();


        // Please note that rowCount() might NOT work with SELECT statements
        if($stmt->fetchColumn() == 0)
            return false;

        return true;
    }


    function isLoginCorrect($email, $password) {
        global $conn;
        $stmt = $conn->prepare("SELECT *
                              FROM autenticado
                              WHERE email = ? AND password = ?");
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    function getMostVotedUsers()
    {
        global $conn;
        global $smarty;
        $stmt = $conn->prepare("SELECT * FROM top_users ORDER BY pontuacao DESC LIMIT 5");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_LAZY);
        $smarty->assign("MOST_VOTED_USERS", $stmt);
    }
?>
