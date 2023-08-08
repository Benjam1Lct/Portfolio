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
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="./contacts.css">
    <title>Contacts</title>
</head>
<body>
    <section>
        <div class="firstSection">
            <?php include '../header/header.php'; ?>
            <div class="heroBanner">
                <div class="limitheroBanner">
                    
                </div>
            </div>
        </div>
       
        <?php include '../footer/footer.php'; ?>   
    </section>
   

<script src="../footer/footer.js"></script>
<script src="../header/header.js"></script>
</body>
</html>