<?php
session_start();
 include "db.php";
if(isset($_POST['envoi'])){ 

    if(!empty($_POST['nom']) and !empty($_POST['mdp'])){
        $nom = htmlspecialchars($_POST['nom']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(nom,mdp)Values(?,?)');
        $insertUser->execute(array($nom,$mdp));
        
        $recupUser =$bdd->prepare('SELECT* FROM users WHERE nom = ? AND mdp = ?');
        $recupUser->execute(array($nom,$mdp));
        if($recupUser->rowcount() > 0){
            $_SESSION['nom'] = $nom;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
        
    }else{
        echo "Votre mot de passe ou nom est incorrect";
    }

   
}else{
    echo "Veuillez compléter tous les champs";
}
   

?>




<?php  include_once "includes/header.php"; ?>

<Form methode="POST" action="" >

<input type="texte"  name="nom" autocomplete="off">
<br>
<input type="password" name="mdp" autocomplete="off">
<br><br>
<input type="submit" name="envoi">



</Form>









<?php  include_once "includes/foother.php"; ?>