<?php  include_once "includes/header.php"; ?>

<body class="bg_login">
    <p></p>


<div class="div">
    <h1>Login</h1>
 <form method="POST" action="login_script.php">

 <input type="text" name="email" autocomplete="off" placeholder="Adresse email">
  <br><br>
  <input type="password"  name="mdp" autocomplete="off"  placeholder="Mot de passe">
  <br><br>
  <input type="submit" name="envoi" class="btn btn-primary" value="envoi">

<!---autocomplete="off"- 'empeche le navigateur affiche les ancients suggestion.-->
 </form>
 </div>














    
    <?php  include_once "includes/foother.php"; ?>
</body>