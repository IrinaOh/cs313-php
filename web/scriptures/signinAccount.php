<?php
  session_start();
  
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  require('dbConnect.php');
  $db = get_db();
  
  $query = 'SELECT account_username, account_password FROM account WHERE account_username=:username';
  
  $stmt = $db->prepare($query);
  $stmt->bindValue('account_username', $username, PDO::PARAM_STR);
  $stmt->execute();
  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

  
  // if ($result)
  // {
  //   $row = $stmt->fetch();
    
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
  // }
  // else
  // {
  //   header('Location: signin.php');
  // }
?>