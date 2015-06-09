<?php
	include_once('../config/init.php');
	include_once('../database/answers.php');
    include_once('../database/questions.php');
    include_once('../database/users.php');

	if(isset($_GET['id']) && !empty($_GET['id'])) {
		$questionID = $_GET['id'];
		$question = extractAnswersFromQuestion($questionID);
		$smarty->assign('QUESTION', $question);

		getMostVotedQuestions();
	   	getMostVotedUsers();

		$smarty->display('show_question.tpl');
	}
?>