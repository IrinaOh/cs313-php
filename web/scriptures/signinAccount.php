<?php
  session_start();
  require('dbConnect.php');
  
  $user = $_POST['username'];
  $pass = $_POST['password'];
  
  $query = 'SELECT account_password, account_username FROM accounts WHERE account_username=:user';
  
  $stmt = $db->prepare($query);
  $stmt->BindValue(':user', $user, PDO::PARAM_STR);
  $result = $stmt->execute();
  
  if ($result)
  {
    $row = $stmt->fetch();
    
    $hashedPass = $row['account_password'];
    
    if (password_verify($pass, $hashedPass))
    {
      $_SESSION['user'] = $row['account_username'];
      
      header('Location: home.php');
    }
    else
    {
      header('Location: signin.php');
    }
  }
  else
  {
    header('Location: signin.php');
  }
?>