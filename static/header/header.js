// Check for the "from" query parameter in the URL
const urlParams = new URLSearchParams(window.location.search);
const fromIndex = urlParams.get('from');
var positionMenu = 0;
const buttonMenu = document.querySelector('.menuButton');
const about = document.querySelector('.contentButton .about');
const projects = document.querySelector('.contentButton .projects')
const litleNav = document.querySelector('.AllContentButton .littleButton');
const musicWavesBox = document.querySelector('.link.music');
const musicWavesIcon = document.querySelector('.loader-container');
var stateMusic = 0;

// If the "from" parameter is present and its value is "index", add the "fade-in" class to the body
if (fromIndex === 'index') {
  document.body.classList.add('fade-in');
  // Remove the "fade-in" class once the animation is finished
  setTimeout(function() {
    document.body.classList.remove('fade-in');
  }, 500); // The timeout duration should match the animation duration in CSS (0.5s in this case)
};

function handleClick() {
  console.log("Click");
  if (positionMenu === 0 && !buttonMenu.classList.contains('active')) {
    buttonMenu.classList.add('active');

    about.classList.add('active');
    projects.classList.add('active');
    setTimeout(function() {
      about.style.display = 'none';
      projects.style.display = 'none';
      litleNav.classList.remove('active')
      litleNav.style.display = 'flex'
    }, 99);
    
    positionMenu += 1;
    console.log(positionMenu);
  } else if (positionMenu === 1 && buttonMenu.classList.contains('active')) {
    buttonMenu.classList.remove('active');

    litleNav.classList.add('active')
    setTimeout(function() {
      litleNav.style.display = 'none'
      about.classList.remove('active');
      projects.classList.remove('active');
      about.style.display = 'flex'
      projects.style.display = 'flex'
    }, 99);

    positionMenu -= 1;
    console.log(positionMenu);
  }
}

function musicClick() {
  if (stateMusic === 0) {
    musicWavesIcon.style.display = "none";
    musicWavesBox.style.background = "url('./assets/MusicOff.png')";
    musicWavesBox.style.backgroundSize = "contain";
    musicWavesBox.style.backgroundRepeat  = "no-repeat";
    musicWavesBox.style.backgroundPosition = "center";
    stateMusic += 1;
  } else if (stateMusic === 1) {
    musicWavesBox.style.background = "none";
    musicWavesIcon.style.display = "flex";
    stateMusic -= 1
  }
}