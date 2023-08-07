<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./index.css">
    <script>
        // Fonction pour vérifier si la largeur de l'écran est celle d'un smartphone
        function isMobile() {
            return window.innerWidth <= 768; // Vous pouvez ajuster cette valeur en fonction de vos besoins
        }

        // Vérifier si l'écran est un smartphone et effectuer la redirection
        if (isMobile()) {
            window.location.href = "./mobile/mobile.php";
        }
    </script>
    <title>Preload</title>
</head>

<body>
    
    
    <div class="angry-grid">
        <div id="item-0"> 
            <div class="img"></div>
        </div>
        <div id="item-1"></div>
        <div id="item-2">&nbsp;</div>
        <div id="item-3">&nbsp;</div>
    </div>


<script src="./index.js"></script>
</body>
    
</html>