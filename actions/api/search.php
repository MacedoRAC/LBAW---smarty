<?php
	include_once($BASE_DIR . 'config/init.php');

	function extractQuestions($term) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM pergunta, post WHERE pergunta.idpergunta = post.idpost AND post.texto LIKE '%" . $term . "%'");
		$stmt->execute();

		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}


	function extractAnswers($term) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM resposta, post WHERE resposta.idresposta = post.idpost AND post.texto LIKE '%" . $term . "%'");
		$stmt->execute();

		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}


	function extractComments($term) {
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM comentario, post WHERE comentario.idcomentario = post.idpost AND post.texto LIKE '%" . $term . "%'");
		$stmt->execute();

		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $res;	
	}
?>