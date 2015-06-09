<?php
    include_once($BASE_DIR . 'config/init.php');

    function insertQuestion($text, $id, $tags) {
        global $conn;
        $data = array();
        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
            $conn->beginTransaction();
            $stmt = $conn->prepare("INSERT INTO post (texto, idautenticado) VALUES (?, ?)");
            $stmt->bindValue(1, $text);
            $stmt->bindValue(2, (int)$id);
            $stmt->execute();

            $stmt = $conn->query("SELECT MAX(idpost) AS last FROM post");
            $lastID = $stmt->fetch()['last'];
            foreach($tags as $tag) {
                $stmt = $conn->prepare("INSERT INTO tag (nome, idpost) VALUES (?, ?)");
                $stmt->bindValue(1, $tag);
                $stmt->bindValue(2, (int)$lastID);
                $stmt->execute();
            }
            $data['success'] = true;
            $conn->commit();
        } catch(Exception $e) {
            echo $e->getMessage();
            $data['success'] = false;
            $conn->rollBack();
        }
        return $data;
    }



    function getLastQuestions(){
        global $conn;
        global $smarty;
        $stmt = $conn->prepare("SELECT * FROM pergunta, post, autenticado WHERE post.idpost = pergunta.idpergunta AND post.idautenticado = autenticado.idautenticado ORDER BY post.idpost DESC LIMIT 5");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_LAZY);
        $smarty->assign("LAST_QUESTIONS", $stmt);
    }


    function getMostVotedQuestions() {
        global $conn;
        global $smarty;
        $stmt = $conn->prepare("SELECT * FROM pergunta, post, autenticado WHERE post.idpost = pergunta.idpergunta AND post.idpost = autenticado.idautenticado ORDER BY post.votospositivosvisitantes DESC LIMIT 5");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_LAZY);
        $smarty->assign("MOST_VOTED_QUESTIONS", $stmt);
    }
?>