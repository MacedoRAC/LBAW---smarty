<?php
	include_once('../config/init.php');
	include_once('../actions/api/search.php');

	if(isset($_GET['search'])) {
		$term = $_GET['search'];

		$questions = extractQuestions($term);
		$answers = extractAnswers($term);
		$comments = extractComments($term);
		$smarty->assign("SEARCH_QUESTIONS", $questions);
		$smarty->assign("SEARCH_ANSWERS", $answers);
		$smarty->assign("SEARCH_COMMENTS", $comments);
		$smarty->display('search.tpl');
	}
?>