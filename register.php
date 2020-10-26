<?php

include 'app.php';

if( isset($_POST['register'] ) ) {

    //TODO: validatie op velden... (bv lengte van wachtwoord)
    //TODO: Controle of email adres reeds gebruikt wordt
    $sql = 'SELECT COUNT(`email`) as total from `users` WHERE `email` = :email';
    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute( [ 
    ':email' => $_POST['email'] ?? '',
    ] );
    $total = (int) $pdo_statement->fetchColumn();

    if($total > 0) {
        echo 'email bestaat al...';
    } else {

        //SQL om all info op te vragen van de huidige page_id ($v_id)
        $sql = 'INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`)
                VALUES (:firstname, :lastname, :email, :password)';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ 
            ':firstname' => $_POST['firstname'] ?? '',
            ':lastname' => $_POST['lastname'] ?? '',
            ':email' => $_POST['email'] ?? '',
            ':password' => password_hash( $_POST['password'], PASSWORD_DEFAULT ),
        ] );

        $user_id = $db->lastInsertId();
        
        $_SESSION['user_id'] = $user_id;
        header('location: index.php');

    }

    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/scss/main.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eindwerk_php</title>
</head>
<body>
  <div class="login">
  <div class="container mt-4">
    <div class="row login">
      <div class="col-6 col-md-4">
        <h1 class="login__name">fe-pgm</h1>
      </div>
      <div class="col-6 col-md-6">
        <ul class="login__navigation">
          <li>Home</li>
          <li>Events</li>
          <li>Eat-Options</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="col-6 col-md-2">
        <button type="button" class="login__button_login"><a href="login.php">Login</a></button> 
      </div>

    </div>

    <h1 class="login__create">Create Account</h1>
    <div class="login__form">
      <form method="POST">
        <div class="form-group">
          <label class="login__title" for="exampleInputEmail">Firstname</label>
          <input  name="firstname" type="text" class="form-control" id="exampleInputName" aria-describedby="Name"
            placeholder="First name">
        </div>
        <div class="form-group">
          <label class="login__title" for="exampleInputEmail">Lastname</label>
          <input  name="lastname" type="text" class="form-control" id="exampleInputName" aria-describedby="Name"
            placeholder="Lastname">
        </div>
        <div class="form-group login__email">
          <label class="login__title" for="exampleInputEmail">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group login__password">
          <label class="login__title" for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
     

    </div>
    <div class="login__checkbox">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label  class="custom-control-label" for="customCheck1">I agree to <span>the Terms</span> and <span>Privacy
            Policy.</span>
        </label>
        <div class="login__register">
          <div class="col-12 col-md-2">
            <button type="submit" name="register">Registreer</button>
        </div>
        </div>
      </div>  
     </form>  
    </div>
  </div>
</body>

</html>