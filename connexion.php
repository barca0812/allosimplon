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
<div class="container-fluid d-flex justify-content-center" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Connexion</h1>
        </div>
    </div>
</div>
<form action="verification.php" method="POST">
<div class="d-flex flex-wrap flex-column " style="height:515px">
    <div class="d-flex flex-column  align-items-center" >
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="d-flex flex-column align-items-center" >
        <label for="password">mot de passe :</label>
        <input type="password" id="password" name="mdp" required>
    </div>
    <div class="d-flex justify-content-center align-items-center;">
        <input type="submit" value="Se connecter">
    </div>
</div>
</form>















<?php

include 'assets/includes/footer.php';



?>
</body>
</html>