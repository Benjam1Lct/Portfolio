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
    <link rel="stylesheet" href="./about.css?version=<?php echo time(); ?>">
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
    <title>About</title>
</head>
<body>
    <section>
        <div class="firstSection">
            <?php include '../header/header.php'; ?>
            <div class="heroBanner">
                <div class="limitheroBanner">
                    <div class="leftheroBanner">
                        <p>Hi<span>,</span> I am</p>
                        <P class="mainText">Benjamin <br> Lecomte</P>
                        <p>A french student in the first <br> year of computer studies</p>
                        <div class="buttonheroBanner">
                            Contact Me
                        </div>
                    </div>
                    <div class="rightheroBanner">
                        <img src="./assets/heroBanner.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="timeline">
            <div class="date1">
                <div class="flex">
                    <div class="circle1">
                        <div class="lineVerti1"></div>
                        <div class="centerCircle1"></div>
                    </div>
                    <div class="line1"></div>  
                </div>
                
                <div class="box1"></div> 
            </div>
            <div class="dateOther">
                <div class="flex">
                    <div class="circleOther">
                        <div class="lineVertiOther"></div>
                        <div class="centerCircleOther"></div>
                    </div>
                    <div class="lineOther"></div>  
                </div>
                
                <div class="boxOther"></div> 
            </div>
            <div class="dateOther">
                <div class="flex">
                    <div class="circleOther">
                        <div class="lineVertiOther"></div>
                        <div class="centerCircleOther"></div>
                    </div>
                    <div class="lineOther"></div>  
                </div>
                
                <div class="boxOther"></div> 
            </div>
            <div class="dateOther">
                <div class="flex">
                    <div class="circleOther">
                        <div class="lineVertiOther"></div>
                        <div class="centerCircleOther"></div>
                    </div>
                    <div class="lineOther"></div>  
                </div>
                
                <div class="boxOther"></div> 
            </div>
            
        </div>
       
        <?php include '../footer/footer.php'; ?>   
    </section>
   
<script src="../footer/footer.js?version=<?php echo time(); ?>"></script>
<script src="../header/header.js?version=<?php echo time(); ?>"></script>
</body>
</html>