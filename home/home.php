<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="./home.css">
    <title>Home</title>
</head>
<body>
    <section>
        <div class="gradient">
            <?php include '../header/header.php'; ?>
            <div class="heroBanner">
                <div class="titleBanner">
                    <div class="text">
                        <p>Hi<span>,</span> I am</p>
                        <P class="mainText">Benjamin <br> Lecomte</P>
                        <p>Creative Coder</p>
                        <p>Student</p>
                    </div>
                    <div class="card">
                        <div class="cardCalque">
                            <img class="cardContent" src="./assets/card.png" alt="">
                            <img class="cardButton" src="./assets/cardButton.png" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="footerBanner">
                    <div class="leftfooterBanner">
                        <div>
                            <p>PearlClone/</p> 
                        </div>
                        <div>
                            <img src="./assets/student.png" alt="">
                            <p>French Student</p>
                        </div>
                        <div>
                            <img src="./assets/book.png" alt="">
                            <p>BUT Informatique</p>
                        </div>
                    </div>
                    <div class="rightfooterBanner">
                        <p>All Rights Reserved ©2023</p>
                    </div>
                </div>
            </div>    
        </div>

        <div class="categories">
            <div class="listCat">
                <div class="listCatLeft">
                    <p>PROGRAMMER</p>
                    <p>STUDENT</p>
                    <p>DESIGNER</p>
                </div>
                <div class="listCatRight">
                    <p>2019</p>
                    <div class="ligne"></div>
                    <p>2023</p>
                </div>
            </div>
        </div>

        <div class="tuiles">

            <div class="projectsBanner">
                <div class="projectsBannerContent">
                    <img class="button" src="./assets/buttonProjects.png" alt="">
                    <div class="projectsBannerContentText">
                    <p>All my projects <br> since high <br> school</p>
                    <img src="./assets/imageProjects.png" alt=""> 
                    </div>  
                </div>                
            </div>

            <div class="dualTuilesFlex">
                <div class="dualTuiles">

                    <div class="recent">
                        <div class="top">
                            <p>RECENT</p>
                            <img class="button" src="./assets/recentTop.png" alt="">
                        </div>
                        <img class="banner" src="./assets/middleRecent.png" alt="">
                        <div class="bottom">
                            <div class="date">
                                <p>SnapOCR</p>
                                <p class="dateText">2023</p>
                            </div>
                            <p>Web application for extracting texte from image thanks to js tensorflow training and save it</p>
                        </div>
                    </div>

                    <div class="skils">
                        <p class="title">Weapons of Choice</p>
                        <div class="settings">
                            <img class="circle" src="./assets/settings.png" alt="">
                            <div class="settingsText">
                                <p>This is my favorite tools set<span>.</span>  I mainly work for web application and make video games also<span>.</span></p>
                                <img class="skilsImage" src="./assets/skils.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="contactFlex">
                <div class="contact">
                    <div class="contactSize">
                       <div class="link">
                        <div class="linkTop">
                            <img src="./assets/github.png" alt="">
                            <img src="./assets/insta.png" alt="">
                            <img src="./assets/mail.png" alt="">
                        </div>
                        <div class="linkBottom">
                            <img src="./assets/twitter.png" alt="">
                            <img src="./assets/linkedin.png" alt="">
                            <img src="./assets/discord.png" alt="">
                        </div>
                    </div>
                    <div class="text">
                        <p class="title">Contacts & Social Media</p>
                        <p class="subtitle">Interested by my work? contacted me or follow me on my different social networks to follow my most recent work</p>
                    </div> 
                    </div>
                    
                </div>
            </div>

            <div class="archiveFlex">
                <div class="archives">
                    <div class="archiveContent">
                        <p>Archives</p>
                        <img src="./assets/buttonArchives.png" alt="">  
                    </div>
                </div>
            </div>

            <div class="space"></div>
        </div>
        
        <?php include '../footer/footer.php'; ?>
    </section>
    

<script src="../footer/footer.js"></script>
<script src="../header/header.js"></script>
<script src="./home.js"></script>
</body>
</html>