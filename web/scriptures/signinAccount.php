<?php
  session_start();
  require('dbConnect.php');
  $db = get_db();
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $query = 'SELECT account_password, account_username FROM accounts WHERE account_username='.$username;
  
  $stmt = $db->prepare($query);
  $stmt->BindValue('username', $username, PDO::PARAM_STR);
  $result = $stmt->execute();
  
  if ($result)
  {
    $row = $stmt->fetch();
    
    $hashedPass = $row['account_password'];
    
    if (password_verify($password, $hashedPass))
    {
      $_SESSION['username'] = $row['account_username'];
      
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