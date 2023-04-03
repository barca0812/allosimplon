<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include 'assets/includes/config.php';


$email = $_POST['email'];
$mdp = $_POST['mdp'];

$sql = "SELECT * FROM user WHERE email=:email AND mdp=:mdp";
$stmt = $conn->prepare($sql);
$stmt->execute(['email' => $email, 'mdp' => $mdp]);
$resultat = $stmt->fetch(PDO::FETCH_ASSOC);

if($resultat){
    $_SESSION['pseudo']=$resultat['pseudo'];
    echo $resultat['pseudo'];
    header("Location: index.php");
    
}
else{
    "email ou mot de passe incorrect";
}


  ?>
  
</body>
</html>