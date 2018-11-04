<?php
  session_start();
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  require('dbConnect.php');
  $db = get_db();
  
  $query = 'SELECT account_password, account_username FROM account WHERE account_username='.$username;
  
  $stmt = $db->prepare($query);
  // $stmt->BindValue('username', $username, PDO::PARAM_STR);
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