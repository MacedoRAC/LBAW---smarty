<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!isset($_POST['username']) || !isset($_POST['password']) || empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['login']['success'] = 0;
    $_SESSION['login']['error_code'] = 'invalid_login';
    $_SESSION['login']['error_message'] = "Invalid Login!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];


  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login successful';
  } else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
