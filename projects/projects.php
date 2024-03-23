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
    <link rel="stylesheet" href="./projects.css?version=<?php echo time(); ?>">
    <title>About</title>
</head>
<body>
<section>
    <div class="firstSection">
        <?php include '../header/header.php'; ?>
        <img src="./assets/background_blue.svg" class="background_blue" alt="">
    </div>

    <div class="content-heroBanner">
        <div class="heroBanner-Projects">
            <div class="left-heroBanner">
                <div class="left-heroBanner-img"></div>
                <div class="left-heroBanner-date">
                    <p class="left-heroBanner-date-day">12 dec. 2023</p>
                    <img src="./assets/point_mediant.svg" alt="">
                    <p class="left-heroBanner-date-views">23 views</p>
                </div>
                <p class="left-heroBanner-title">Title of the application</p>
                <p class="left-heroBanner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in ex luctus, porttitor enim vel, scelerisque ex. Vivamus id augue magna.</p>
                <div class="left-heroBanner-button">
                    <p>More details</p>
                </div>
            </div>
            <div class="right-heroBanner">
                <div class="right-top-heroBanner">
                    <div class="right-hero">
                        <div class="right-heroBanner-img"></div>
                    </div>
                    <div class="left-hero">
                        <div class="right-heroBanner-date">
                            <p class="right-heroBanner-date-day">12 dec. 2023</p>
                            <img src="./assets/point_mediant.svg" alt="">
                            <p class="right-heroBanner-date-views">23 views</p>
                        </div>
                        <p class="right-heroBanner-title">Title of the application</p>
                        <p class="right-heroBanner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in ex luctus, porttitor enim vel, scelerisque ex. Vivamus id augue magna.</p>
                        <div class="right-heroBanner-button">
                            <p>More details</p>
                        </div>
                    </div>
                </div>
                <div class="right-bottom-heroBanner">
                    <div class="right-hero">
                        <div class="right-heroBanner-img"></div>
                    </div>
                    <div class="left-hero">
                        <div class="right-heroBanner-date">
                            <p class="right-heroBanner-date-day">12 dec. 2023</p>
                            <img src="./assets/point_mediant.svg" alt="">
                            <p class="right-heroBanner-date-views">23 views</p>
                        </div>
                        <p class="right-heroBanner-title">Title of the application</p>
                        <p class="right-heroBanner-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in ex luctus, porttitor enim vel, scelerisque ex. Vivamus id augue magna.</p>
                        <div class="right-heroBanner-button">
                            <p>More details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-of-content">
            <div class="list-of-content-title">
                <p>All Projects</p>
                <div class="list-of-content-title-ligne"></div>
                <div class="list-of-content-title-button">
                    <img class="burger" src="./assets/Burger_Menu.svg" alt="">
                    <img class="circled" src="./assets/Circled_Menu.svg" alt="">
                </div>
            </div>

            <div class="tiles">
                <?php
                for ($i = 0; $i < 10; $i++) {
                echo '<div class="tiles-content">';
                    echo '<p>Title of the projects</p>';
                    echo '</div>';
                }
                ?>
            </div>


        </div>

        <?php include '../footer/footer.php'; ?>
    </div>




</section>

<script src="../footer/footer.js?version=<?php echo time(); ?>"></script>
<script src="../header/header.js?version=<?php echo time(); ?>"></script>
<script src="./projects.js?version=<?php echo time(); ?>"></script>
</body>
</html>