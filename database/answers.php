<?php
    include_once($BASE_DIR . 'config/init.php');
    include_once($BASE_DIR . 'classes/Answer.php');


    function extractAnswersFromQuestion($questionID) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM resposta WHERE idpergunta = ?");
        $stmt->bindValue(1, $questionID);
        $stmt->execute();

        $answers = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['idresposta'];
            $stmt = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
            $stmt->bindValue(1, (int)$id);
            $stmt->execute();

            $post = $stmt->fetch();
            $creatorID = $post['idautenticado'];
            $text = $post['texto'];
            $date = $post['data'];


            $stmt = $conn->prepare("SELECT idpost, SUM(final) as tu FROM view_thumbsup WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
            $stmt->bindValue(1, (int) $id);
            $stmt->execute();

            $res = $stmt->fetch();
            $tu = $res['tu'];


            $stmt = $conn->prepare("SELECT idpost, SUM(final) as td FROM view_thumbsdown WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
            $stmt->bindValue(1, (int) $id);
            $stmt->execute();


            $res = $stmt->fetch();
            $td = $res['td'];



            $stmt = $conn->prepare("SELECT * FROM autenticado WHERE idautenticado = ?");
            $stmt->bindValue(1, (int) $creatorID);
            $stmt->execute();

            $res = $stmt->fetch();
            $creatorName = $res['nome'];


            // Extract comments from this answer
            $stmt = $conn->prepare("SELECT * FROM comentario WHERE idcomentario = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();


            // Iterate over all comments
            $comments = array();
            while($comment = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $commentID = $comment['idcomentario'];


                $stmt = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
                $stmt->bindValue(1, (int) $commentID);
                $stmt->execute();

                $postComment = $stmt->fetch();
                $creatorIDComment = $postComment['idautenticado'];
                $textComment = $postComment['texto'];
                $dateComment = $postComment['data'];

                $stmt = $conn->prepare("SELECT idpost, SUM(final) as tu FROM view_thumbsup WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
                $stmt->bindValue(1, (int) $commentID);
                $stmt->execute();

                $resComment = $stmt->fetch();
                $tuComment = $resComment['tu'];


                $stmt = $conn->prepare("SELECT idpost, SUM(final) as td FROM view_thumbsdown WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
                $stmt->bindValue(1, (int) $commentID);
                $stmt->execute();


                $resComment = $stmt->fetch();
                $tdComment = $resComment['td'];


                $stmt = $conn->prepare("SELECT * FROM autenticado WHERE idautenticado = ?");
                $stmt->bindValue(1, (int) $creatorIDComment);
                $stmt->execute();

                $res = $stmt->fetch();
                $creatorNameComment = $res['nome'];


                $comment = new Comment($textComment, $tuComment, $tdComment, $creatorNameComment, $creatorIDComment, $dateComment);
                array_push($comments, $comment);
            }

            $answer = new Answer($text, $tu, $td, $creatorName, $date, $creatorID, $comments);
            array_push($answers, $answer);
        }
        return $answers;
    }
?>