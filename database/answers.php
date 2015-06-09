<?php
    include_once($BASE_DIR . 'config/init.php');
    include_once($BASE_DIR . 'classes/Answer.php');
    include_once($BASE_DIR . 'classes/Comment.php');
    include_once($BASE_DIR . 'classes/Question.php');


    function extractAnswersFromQuestion($questionID) {
        global $conn;
        $stmt11 = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
        $stmt11->bindValue(1, $questionID);
        $stmt11->execute();
        $questionData = $stmt11->fetch();

        $questionText = $questionData['texto'];
        $questionDate = $questionData['data'];
        $questionCreatorID = $questionData['idautenticado'];

        $stmt14 = $conn->prepare("SELECT idpost, SUM(final) as tu FROM view_thumbsup WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
        $stmt14->bindValue(1, $questionID);
        $stmt14->execute();

        $tuData = $stmt14->fetch();
        $questionTu = $tuData['tu'];

        $stmt15 = $conn->prepare("SELECT idpost, SUM(final) as td FROM view_thumbsdown WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
        $stmt15->bindValue(1, $questionID);
        $stmt15->execute();

        $tdData = $stmt15->fetch();
        $questionTd = $tdData['td'];


        $stmt12 = $conn->prepare("SELECT * FROM autenticado WHERE idautenticado = ?");
        $stmt12->bindValue(1, $questionData['idautenticado']);
        $stmt12->execute();

        $userData = $stmt12->fetch();
        $questionCreatorName = $userData['nome'];


        $stmt = $conn->prepare("SELECT * FROM resposta WHERE idpergunta = ?");
        $stmt->bindValue(1, $questionID);
        $stmt->execute();

        $answers = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['idresposta'];
            $stmt2 = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
            $stmt2->bindValue(1, (int)$id);
            $stmt2->execute();

            $post = $stmt2->fetch();
            $creatorID = $post['idautenticado'];
            $text = $post['texto'];
            $date = $post['data'];


            $stmt3 = $conn->prepare("SELECT idpost, SUM(final) as tu FROM view_thumbsup WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
            $stmt3->bindValue(1, (int) $id);
            $stmt3->execute();

            $res = $stmt3->fetch();
            $tu = $res['tu'];


            $stmt4 = $conn->prepare("SELECT idpost, SUM(final) as td FROM view_thumbsdown WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
            $stmt4->bindValue(1, (int) $id);
            $stmt4->execute();


            $res = $stmt4->fetch();
            $td = $res['td'];



            $stmt5 = $conn->prepare("SELECT * FROM autenticado WHERE idautenticado = ?");
            $stmt5->bindValue(1, (int) $creatorID);
            $stmt5->execute();

            $res = $stmt5->fetch();
            $creatorName = $res['nome'];


            // Extract comments from this answer
            $stmt6 = $conn->prepare("SELECT * FROM comentario WHERE idresposta = ?");
            $stmt6->bindValue(1, $id);
            $stmt6->execute();


            // Iterate over all comments
            $comments = array();
            while($comment = $stmt6->fetch(PDO::FETCH_ASSOC)) {
                $commentID = $comment['idcomentario'];


                $stmt7 = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
                $stmt7->bindValue(1, (int) $commentID);
                $stmt7->execute();

                $postComment = $stmt7->fetch();
                $creatorIDComment = $postComment['idautenticado'];
                $textComment = $postComment['texto'];
                $dateComment = $postComment['data'];

                $stmt8 = $conn->prepare("SELECT idpost, SUM(final) as tu FROM view_thumbsup WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
                $stmt8->bindValue(1, (int) $commentID);
                $stmt8->execute();

                $resComment = $stmt8->fetch();
                $tuComment = $resComment['tu'];


                $stmt9 = $conn->prepare("SELECT idpost, SUM(final) as td FROM view_thumbsdown WHERE idpost = ? GROUP BY idpost ORDER BY idpost");
                $stmt9->bindValue(1, (int) $commentID);
                $stmt9->execute();


                $resComment = $stmt9->fetch();
                $tdComment = $resComment['td'];


                $stmt10 = $conn->prepare("SELECT * FROM autenticado WHERE idautenticado = ?");
                $stmt10->bindValue(1, (int) $creatorIDComment);
                $stmt10->execute();

                $res = $stmt10->fetch();
                $creatorNameComment = $res['nome'];


                $comment = new Comment($textComment, $tuComment, $tdComment, $creatorNameComment, $creatorIDComment, $dateComment);
                array_push($comments, $comment);
            }

            $answer = new Answer($id, $text, $tu, $td, $creatorName, $date, $creatorID, $comments);
            array_push($answers, $answer);
        }

        $question = new Question($questionID, $questionText, $questionTu, $questionTd, $questionCreatorName, $questionDate, $questionCreatorID, $answers);
        return $question;
    }
?>