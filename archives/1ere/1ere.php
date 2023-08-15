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
    <link rel="icon" href="../../logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../header/header.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../footer/footer.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="../archives.css?version=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style.css?version=<?php echo time(); ?>">
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
        <?php include '../../header/header.php'; ?>
        <div class="contentSection">
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <div class="content content<?php echo $i; ?>">
                    <div class="download">
                        <img src="../assets/pdf.png" alt="">
                        <p>OPEN</p>
                    </div>
                    <div class="contentTransform">
                        <?php for ($j = 0; $j < 5; $j++) { ?>
                            <?php if ($i === 2) { ?>
                                <p>Contenu unique pour la section <?php echo $i; ?></p>
                                <img src="../assets/unique-image.png" alt="">
                            <?php } else if ($i === 4)  { ?>
                                <p>CORRECTION TEST numero4</p>
                                <img src="../assets/inside.png" alt="">
                            <?php } else { ?>
                                <p>CORRECTION TEST</p>
                                <img src="../assets/inside.png" alt="">
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <?php include '../../footer/footer.php'; ?>   
    </section>
   

<script src="../../footer/footer.js?version=<?php echo time(); ?>"></script>
<script src="../../header/header.js?version=<?php echo time(); ?>"></script>
<script src="../archives.js?version=<?php echo time(); ?>"></script>
</body>
</html>