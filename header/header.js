
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

function pageBack() {
  window.history.back();
}

document.body.classList.add('fade-in');

function changePage(page) {

  document.body.classList.remove('fade-in');
  document.body.classList.add('fade-out');

  setTimeout(() => {
    // Naviguer vers la nouvelle page
    window.location.href = `/portfolio/${page}/${page}.php`;
  }, 10);

  // Empêcher le comportement par défaut du lien (si vous utilisez des balises <a>)
  return false;
}