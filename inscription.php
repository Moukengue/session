<?php  include_once "includes/header.php"; ?>

<body id="bg">
    <p></p>

<div class="box"> 
<form method="POST" action="login_script_inscription.php"> 
<fieldsert class="fieldsert">
<legend class="b"><b>Informations personnelles</b></legend>
<br>
<div class="inputBox">
<input type="text" name="nom" class="inputUser" required>
<label for="nom">Nom</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="prenom" class="inputUser" required>
<label for="prenom">Prenom</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="pays" class="inputUser" required>
<label for="pays">Pays</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="ville" class="inputUser" required>
<label for="ville">Ville</label>
</div>
<br><br>
<div class="inputBox"> 
<input type="text" name="email" class="inputUser" required>
<label for="email">Adresse email</label>
</div>
<br><br>
<div class="inputBox">
<input type="text" name="mdp" class="inputUser" required>
<label for="mdp">Mot de passe</label>
</div>
<br>
<input type="submit" name="envoi" class="btn btn-primary" value="envoi">
</fieldsert>
</form>
</div>
<?php  include_once "includes/foother.php"; ?>



</body>
