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
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css?<?= time();?>">
</head>
<body>
<div class="container">
    <h1>Login</h1>
    <?php if($message) : ?>
        <div class="alert"><?= $message; ?></div>
    <?php endif; ?>
    <form method="POST">
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
        <div class="login__register">
          <div class="col-12 col-md-2">
          <button type="submit" name="login">Login</button>        
        </div>
        </div>
      </div>  
     </form>  
</div>

</body>
</html