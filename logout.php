<?php 
    session_start();


    unset($_SESSION['user']);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion - Wikifruit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

<?php include "include/menu.php" ?>


<div class="container-fluid">

        <div class="row">

            <div class="col-12 col-md-8 offset-md-2 py-5">
                <h1 class="pb-4 text-center">Déconnexion</h1>
                <p class="alert alert-success text-center">Vous avez bien été déconnecté !</p>
            </div>

        </div>

</div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>







