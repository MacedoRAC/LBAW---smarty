<?php
  include_once('../config/init.php');


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