<?php
	include_once('../config/init.php');
    include_once('../database/questions.php');
    include_once('../database/users.php');

    getLastQuestions();
    getMostVotedQuestions();
    getMostVotedUsers();
	$smarty->display('index.tpl');
?>