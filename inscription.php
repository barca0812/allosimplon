<?php

include 'assets/includes/navbar.php';
?>
<div class="container-fluid d-flex justify-content-center" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
            <h1>Inscription</h1>
        </div>
    </div>
</div>
<div class="d-flex flex-wrap flex-column ">


<form action="traitement.php" method="POST">
    <div class="d-flex flex-column align-items-center"> <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="monsieur">Monsieur</option>
            <option value="madame">Madame</option>
        </select>
    </div>
    <div class="d-flex flex-column  align-items-center">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div class="d-flex flex-column align-items-center">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="d-flex flex-column align-items-center">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" required>
    </div>

    <div class="d-flex  flex-column align-items-center">
        <label for="datedenaissance">Date de naissance :</label>
        <input type="date" id="datedenaissance" name="datedenaissance" required>
    </div>
    <div class="d-flex  flex-column align-items-center">
        <label for="adresse">adresse :</label>
        <input type="text" id="adresse" name="adresse" required>
    </div>
    <div class="d-flex flex-column  align-items-center">
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required>
    </div>
   
    <div class="d-flex flex-column align-items-center">
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>
    </div>


    
<div class="d-flex justify-content-center align-items-center;">

<input type="submit" value="Valider">
</div>
</form>

<?php

include 'assets/includes/footer.php';



?>