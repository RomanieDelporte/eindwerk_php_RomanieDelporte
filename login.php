<?php
include 'app.php';
$message = '';
if( isset($_POST['login'] ) ) {

    $user = User::getUserByEmail( $_POST['email'] );
    
    //controle of er een user inzit
    if( isset($user->email) ) {
        //controle of wachtwoord juist is
        if( password_verify ( $_POST['password'], $user->password) )
        {
            $_SESSION['user_id'] = $user->user_id;
            header('location: index.php');
        }
        else {
            $message = 'E-mail en/of wachtwoord is verkeerd';
        }
    }else {
        $message = 'E-mail en/of wachtwoord is verkeerd';
    }
    // header('location: ../index.php?page_id=1');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="scss/main.css?<?= time();?>">
</head>

<body>
  <div class="form">
    <div class="container">
      <div class="row">
         <div class="col-7">
            <div class="form__website">
            <h1>FE-PGM</h1>
            <h2>Een website die het voor u en je kennissen gemakkelijk maakt</h2>
            <p>Login of registreer je</p>
       
                <button type="submit" name="registreer"><a href="register.php">Registreer</a></button>
          </div>
          </div>
          <div class="col-5">
          <h1>Login</h1>
              <?php if($message) : ?>
            <div class="alert"><?= $message; ?></div>
              <?php endif; ?>
              <form class="form__content" method="POST">
          <div class="form-group form__email">
            <label class="form__title" for="exampleInputEmail">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group form__email">
            <label class="form__title" for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
              placeholder="Password">
          </div>
          <div class="form__register">
            <button type="submit" name="login">Login</button>
            </div>
          </div>
         
      </div>
    </div>
</body>

</html