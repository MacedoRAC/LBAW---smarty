<?php
    include_once('../config/init.php');


    function createUser($realname, $username, $password) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
        $stmt->execute(array($username, $realname, sha1($password)));
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
        $stmt = $conn->prepare("SELECT COALESCE(visitantes_votos.idautenticado, votos_tu.idautenticado, votos_td.idautenticado) as idautenticado,
   COALESCE(tu_visitantes, 0)+COALESCE(votos_tu.tu, 0) as tu_result,
   COALESCE(td_visitantes, 0)+COALESCE(votos_td.tu, 0) as td_result,
  COALESCE(tu_visitantes, 0)+COALESCE(votos_tu.tu, 0)-COALESCE(td_visitantes, 0)+COALESCE(votos_td.tu, 0) as pontuacao, autenticado.*
  FROM visitantes_votos
  FULL OUTER JOIN votos_tu ON visitantes_votos.idautenticado=votos_tu.idautenticado
  FULL OUTER JOIN votos_td ON visitantes_votos.idautenticado=votos_td.idautenticado
  FULL OUTER JOIN autenticado ON visitantes_votos.idautenticado = autenticado.idautenticado
  ORDER BY pontuacao DESC, tu_result DESC, visitantes_votos.idautenticado ASC
  LIMIT 5;");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_LAZY);
        $smarty->assign("MOST_VOTED_USERS", $stmt);
    }
?>
