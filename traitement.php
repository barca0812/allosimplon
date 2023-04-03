<?php
session_start();
include 'assets/includes/config.php';
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


$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$pseudo=htmlspecialchars($_POST['pseudo']);
$datedenaissance=htmlspecialchars($_POST['datedenaissance']);
$adresse=htmlspecialchars($_POST['adresse']);
$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);

// tu verifies que tout est plein et rien n'est vide
if (isset($nom, $prenom, $pseudo, $datedenaissance, $adresse,  $email, $mdp) && !empty($nom) && !empty($prenom) && !empty($pseudo) && !empty($datedenaissance) && !empty($adresse) && !empty($email) && !empty($mdp))
{
      // ici on verifie que c'est une vrai adresse mail
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


            $sql = "SELECT * FROM user  WHERE email = :email_utilisateurs";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['email_utilisateurs' => $email]);
            $resultats = $stmt->fetch();
            $rowCount = $stmt->rowCount(); // nombre de lignes affectées

            if ($rowCount == 0) {

                  
                        $inscription = $conn->prepare('INSERT INTO user (nom, prenom, pseudo, datedenaissance, adresse, email, mdp, id_role ) VALUES(:nom, :prenom, :pseudo, :datedenaissance, :adresse, :email, :mdp,:roles )');
                        $inscription->execute(array(
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':pseudo'=> $pseudo,
                        ':datedenaissance'=> $datedenaissance,
                        ':adresse'=> $adresse,
                        ':email' => $email,
                        ':mdp' => $mdp,
                        ':roles' => "2",
                        ));

                        echo"Félicitation votre compte est crée vous pouvez vous connecter.";
                        header("Location: connexion.php");
                  }
                  else {
                        echo "Le compte n'existe pas";
                  }
            }
            else {
                  echo"Ce n'est pas une adresse mail valide";
            }
      }
      else {
            echo "Merci de remplir tous les champs";
      }

//  else {
//       echo"rempli tous les champs";
// }
?>



</body>
</html>
