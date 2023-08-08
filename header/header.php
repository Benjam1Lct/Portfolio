<div class="containerHeader">
    <div class="header">
        <div class="leftButton">

            <div class="homePageBorder">
                <div class="homePageFill">
                    <p>Home page</p>
                    <img src="./assets/buttonHomeRight.png" onclick="homeClick()">
                    <script>
                        function homeClick() {
                            window.location.href = "/portfolio/templates/home/home.php";
                        }
                    </script>
                </div>
            </div>

            <div class="AllContentButton">
                <div class="contentButton">

                        <div class="about mainLink">
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
                            <p>About</p>
                            <p>Projects</p>
                            <p>Archives</p>
                            <p>Contacts</p>
                        </div>

                </div>
            </div>

            <div class="menuButton" onclick="handleClick()">
                <img src="./assets/PlusMath.png" alt="">
            </div>
        </div>

        <div class="rightButton">
            <div class="link">
                <img src="./assets/githubHeader.png" alt="">
            </div>
            <div class="link">
                <img src="./assets/instagramHeader.png" alt="">
            </div>
            <div class="link">
                <img src="./assets/letterHeader.png" alt="">
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