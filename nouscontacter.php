<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Utilisation de flexbox pour le conteneur principal */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Hauteur minimale de la page */
        }
        /* Utilisation de flexbox pour la section du formulaire */
        main {
            flex: 1; /* La section du formulaire prendra toute la place disponible */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        /* Styles pour le formulaire */
        form {
            width: 80%; /* Largeur du formulaire */
            max-width: 600px; /* Largeur maximale */
        }
        label, input[type="submit"] {
            display: block;
            margin-bottom: 1rem;
        }
        input[type="submit"] {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <?php include 'assets/includes/navbar.php'; ?>
    <div class="container-fluid" style="background-color: #F39C12">
    <div class="row">
        <div class="col">
        <h1 class="text-center">Nous contacter</h1>

        </div>
    </div>
</div>
    <main>
 
    

        <form>
            <div class="d-flex flex-column align-items-center">
                <label for="email">Votre adresse email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="d-flex flex-column align-items-center">
                <label for="sujet">Sujet :</label>
                <input type="text" id="sujet" name="sujet" required>
            </div>
            <div class="d-flex flex-column align-items-center">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="d-flex justify-content-center align-items-center;">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </main>
   <?php include 'assets/includes/footer.php'; ?>
</body>
</html>











