<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Wed, 11 Jan 1984 05:00:00 GMT");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./header/header.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="./footer/footer.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="./index.css?version=<?php echo time(); ?>">
    <link rel="icon" href="./logo.png" type="image/x-icon">
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
            <div class="img" onclick="changePage('home')"></div>
        </div>
        <div id="item-1"></div>
        <div id="item-2">&nbsp;</div>
        <div id="item-3">&nbsp;</div>
    </div>

<script src="./footer/footer.js?version=<?php echo time(); ?>"></script>
<script src="./header/header.js?version=<?php echo time(); ?>"></script>
<script src="./index.js"></script>
</body>
    
</html>