<?php
	include_once('../../config/init.php');

	if(isset($_POST['type']) && isset($_POST['userID']) && !empty($_POST['type']) && !empty($_POST['userID'])) {
		// If the user pressed the thumbs up button...
		if($_POST['type'] == "tu") {
			$tuQuestion = thumbsUp($_POST['questionID'], $_POST['userID']);
			echo json_encode($tuQuestion);
		} else if($_POST['type'] == "td" ){
			$tdQuestion = thumbsDown($_POST['questionID'], $_POST['userID']);
			echo json_encode($tdQuestion);
		} else if($_POST['type'] == "answerTu") {
			$tuAnswer = thumbsUp($_POST['answerID'], $_POST['userID']);
			echo json_encode($tuAnswer);
		} else if($_POST['type'] == "answerTd") {
			$tdAnswer = thumbsDown($_POST['answerID'], $_POST['userID']);
			echo json_encode($tdAnswer);
		}
	}



	function thumbsUp($questionID, $userID) {
		global $conn;
		$data = array();
		if(!empty($userID)) {
			$stmt = $conn->prepare("INSERT INTO vote (voto, idpost, idautenticado) VALUES (?, ?, ?)");
			$stmt->bindValue(1, 1);
			$stmt->bindValue(2, $questionID);
			$stmt->bindValue(3, $userID);
			$stmt->execute();

			if(!$stmt)
				$data['success'] = false;


			$stmt = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();


			if($stmt) {
				$data['success'] = true;
				$data['new_value'] = $stmt->fetch()['pontuacao'];
			}


			return $data;
		} else {
			$stmt = $conn->prepare("UPDATE post SET votospositivosvisitantes = votospositivosvisitantes + 1, pontuacao = pontuacao + 1 WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();

			if(!$stmt)
				$data['success'] = false;


			$stmt = $conn->prepare("SELECT * post WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();


			if($stmt) {
				$data['success'] = true;
				$data['new_value'] = $stmt->fetch()['pontuacao'];
			}

			return $data;
		}
	} 


	function thumbsDown($questionID, $userID) {
		global $conn;
		$data = array();
		if(!empty($userID)) {
			$stmt = $conn->prepare("INSERT INTO vote (voto, idpost, idautenticado) VALUES (?, ?, ?)");
			$stmt->bindValue(1, -1);
			$stmt->bindValue(2, $questionID);
			$stmt->bindValue(3, $userID);
			$stmt->execute();

			if(!$stmt)
				$data['success'] = false;


			$stmt = $conn->prepare("SELECT * FROM post WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();


			if($stmt) {
				$data['success'] = true;
				$data['new_value'] = $stmt->fetch()['pontuacao'];
			}

			return $data;
		} else {
			$stmt = $conn->prepare("UPDATE post SET votosnegativosvisitantes = votosnegativosvisitantes + 1, pontuacao = pontuacao - 1 WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();

			if(!$stmt)
				$data['success'] = false;


			$stmt = $conn->prepare("SELECT * post WHERE idpost = ?");
			$stmt->bindValue(1, $questionID);
			$stmt->execute();


			if($stmt) {
				$data['success'] = true;
				$data['new_value'] = $stmt->fetch()['pontuacao'];
			}

			return $data;
		}
	}
?>