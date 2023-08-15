<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../header/header.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="../footer/footer.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="./archives.css?version=<?php echo time(); ?>">
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
    <title>Archives</title>
</head>
<body>
    <section>
        <div class="firstSection">
            <?php include '../header/header.php'; ?>
            <div class="heroBanner">
                <div class="leftheroBanner" onclick="left()">
                    <p>2<span>nd</span></p>
                    <p class="classe">classe</p>
                </div>
                <div class="middleheroBanner" onclick="middle()">
                    <p>1<span>ere</span></p>
                    <p class="classe">classe</p>
                </div>
                <div class="rightheroBanner" onclick="right()">
                    <p>T<span>erm</span></p>
                    <p class="classe">classe</p>
                </div>
            </div>
        </div>
       
        <?php include '../footer/footer.php'; ?>   
    </section>
   

<script src="../footer/footer.js?version=<?php echo time(); ?>"></script>
<script src="../header/header.js?version=<?php echo time(); ?>"></script>
<script src="./archives.js?version=<?php echo time(); ?>"></script>
</body>
</html>