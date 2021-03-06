<?php
    session_start();

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil - Wikifruit</title>
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
                <h1 class="pb-4 text-center">Mon Profil</h1>
                <div class="row">
                    <div class="col-md-6 col-12 offset-md-3 my-4">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Email</strong>: <?php echo htmlspecialchars($_SESSION["user"]["email"]); ?></li>
                            <li class="list-group-item"><strong>Pseudo</strong>: <?php echo htmlspecialchars($_SESSION["user"]["pseudonym"]);?></li>
                            <li class="list-group-item"><strong>Date d'inscription</strong>: <?php echo htmlspecialchars($_SESSION["user"]["register_date"]);?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>