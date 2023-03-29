<?php
include "db.php"; // inclut la connexion a la base de 
$db = connexionBase();
$requete = $db->query("SELECT * FROM  disc inner join  artist on artist.artist_id=disc.artist_id ORDER BY disc_id");
$discs = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();


?>

<?php  include_once "includes/header.php"; ?>

<div class="container">
      <h1>Liste des disques (<?= count($discs) ?> )</h1><br>
   
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <a class="btn btn-primary" href="disc_new.php" role="button">Ajouter</a>
      </div>
      <div class="row">
         <?php foreach ($discs as $disc) : // pour boucle sur la variable discs ?>
         <table class="col-6">
               <tr>
                  <td style="width: 300px;"><img src="img/jaquettes/<?= $disc->disc_picture ?>" class="img-responsive mw-100" style="width: 18rem;"></td>
                  <td>
                     <p><b><?= $disc->disc_title ?></b></p>
                     <p><b><?= $disc->artist_name ?></b></p>
                     <p><b>Label: </b><?= $disc->disc_label ?></p>
                     <p><b>Year: </b><?= $disc->disc_year ?></p>
                     <p><b>Genre: </b><?= $disc->disc_genre ?></p>
                     <a href="disc_detail.php?id=<?= $disc->disc_id ?>" class="btn btn-primary">Détail</a>
                  </td>
               </tr>
            </table>
            <?php endforeach; ?>
      </div>
   </div>

   <?php  include_once "includes/foother.php"; ?>
