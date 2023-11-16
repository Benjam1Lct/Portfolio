<div class="containerHeader">
    <div class="header">
        <div class="leftButton">

            <div class="homePageBorder">
                <div id="homePageFill" class="homePageFill">
                    <img class="backButton" src="/portfolio/header/assets/buttonHomeLeft.png" onclick="pageBack()">
                    <p>Home page</p>
                    <img class="homeButton" src="/portfolio/header/assets/buttonHomeRight.png" onclick="changePage('home')">
                </div>
            </div>

            <div class="AllContentButton">
                <div class="contentButton">

                        <div class="about mainLink" onclick="changePage('about')">
                        <p>About</p>
                        <div class="aboutSub">
                            <p>Studies</p>
                        </div>
                        </div>
                        <div class="projects mainLink">
                            <p>Projects</p>
                            <div class="projectsSub">
                                <p>Collection</p>
                            </div>
                        </div>
                        <div class="littleButton">
                            <p  onclick="changePage('about')">About</p>
                            <p>Projects</p>
                            <p onclick="changePage('archives')">Archives</p>
                            <p onclick="changePage('contacts')">Contacts</p>
                        </div>

                </div>
            </div>

            <div class="menuButton" onclick="handleClick()">
                <img src="/portfolio/header/assets/PlusMath.png" alt="">
            </div>
        </div>

        <div class="rightButton">
            <div class="link">
                <img src="/portfolio/header/assets/githubHeader.png" alt="">
            </div>
            <div class="link">
                <img src="/portfolio/header/assets/instagramHeader.png" alt="">
            </div>
            <div class="link">
                <img src="/portfolio/header/assets/letterHeader.png" alt="">
            </div>
            <div class="link music" onclick="musicClick()" style="display: none">
                <div class="loader-container">
                    <div class="rectangle-1"></div>
                    <div class="rectangle-3"></div>
                    <div class="rectangle-5"></div>
                    <div class="rectangle-6"></div>
                    <div class="rectangle-4"></div>
                    <div class="rectangle-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>