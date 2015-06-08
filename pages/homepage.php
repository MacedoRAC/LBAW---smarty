<?php
	include_once('../config/init.php');
    include_once('../database/questions.php');
    include_once('../database/users.php');

    getLastQuestions();
    getMostVotedQuestions();
<<<<<<< HEAD
    /*getMostVotedUsers();*/
=======
    //getMostVotedUsers();
>>>>>>> e9be3d4eb70b2e223811e063f5077e80eb56da42
	$smarty->display('index.tpl');
?>