<?php
session_start();
//connexion bdd
include 'assets/includes/config.php';
$id_film = $_GET['id_film'];

$reqFilm = $conn->prepare("SELECT * FROM film where id_film=$id_film");
$reqFilm->execute();
$film = $reqFilm->fetch();


$reqAvoir = $conn->prepare("SELECT * FROM avoir where id_film=$id_film");
$reqAvoir->execute();
$avoir = $reqAvoir->fetch();

//if ($avoir != false) {
if (isset($avoir) && !empty($avoir)) {

    $reqGenre = $conn->prepare("SELECT * FROM genre where id_genre=?");
    $reqGenre->execute([$avoir['id_genre']]);
    $genre = $reqGenre->fetch();
}


$reqjouer = $conn->prepare("SELECT * FROM jouer where id_film=$id_film");
$reqjouer->execute();
$jouer = $reqjouer->fetchAll();

foreach ($jouer as $key => $value) {
    $reqacteur = $conn->prepare("SELECT * FROM acteur where id_acteur=?");
    $reqacteur->execute([$value['id_acteur']]);
    $acteurs = $reqacteur->fetchAll();
    foreach ($acteurs as $acteur){
       
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'assets/includes/navbar.php';
    ?>

    <div class="container-fluid" style="background-color: #F39C12">

        <div class="row">

            <div class="col">
                <h1 class="text-center"><?php echo $film['nom_film']; ?></h1>

            </div>
        </div>
    </div>


    <div class="container-fluid" style="width: auto; height:515px;">
        <div class="row">

            <div class="col-6 video-container">

                <div id='blogvision'>
                    <iframe src=<?php echo $film['video_film']; ?> style=' width:100%; height:270px;'></iframe>

                </div>
            </div>
            <div class="col-6">
                <?php echo $film['nom_film']; ?><br>
                <?php echo $film['duree_film']; ?><br>
                <?php echo $genre['nom_genre']; ?><br>
                <!-- <p>-De Cédric Jimenez</p>  -->
                <?php
                $reqjouer = $conn->prepare("SELECT * FROM jouer where id_film=$id_film");
                $reqjouer->execute();
                $jouer = $reqjouer->fetchAll();
                
                foreach ($jouer as $key => $value) {
                    $reqacteur = $conn->prepare("SELECT * FROM acteur where id_acteur=?");
                    $reqacteur->execute([$value['id_acteur']]);
                    $acteurs = $reqacteur->fetchAll();
                    
                    foreach ($acteurs as $acteur){
                        echo $acteur['prenom_acteur'] . " " . $acteur['nom_acteur'] . "&nbsp";
                    }
                }
                ?>
                <?php
                $reqtourner = $conn->prepare("SELECT * FROM tourner where id_film=$id_film");
                $reqtourner->execute();
                $tourner = $reqtourner->fetchAll();
                
                foreach ($tourner as $key => $value) {
                    $reqrealisateur = $conn->prepare("SELECT * FROM realisateur where id_realisateur=?");
                    $reqrealisateur->execute([$value['id_realisateur']]);
                    $realisateurs = $reqrealisateur->fetchAll();
                    
                    foreach ($realisateurs as $realisateur){
                        echo $realisateur['prenom_realisateur'] . " " . $realisateur['nom_realisateur'] . "&nbsp";
                }
                }
                ?>
            </div>
            <div class="synopsis novembre">
                <!-- <p>SYNOPSIS</p>
                    <p> Une plongée au cœur de l’Anti-Terrorisme pendant les 5 jours d'enquête qui ont suivi les attentats du 13 novembre.</p> -->
            </div>

        </div>
    </div>

    </div>








    <?php
    include 'assets/includes/footer.php';
    ?>
</body>

</html>