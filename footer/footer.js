const homeFooter = document.querySelector('#homeFooter');
const aboutFooter = document.querySelector('#aboutFooter');
const projectsFooter = document.querySelector('#projectsFooter');
const archivesFooter = document.querySelector('#archivesFooter');
const contactsFooter = document.querySelector('#contactsFooter');

// Récupérer le nom de la page
const currentPage = window.location.pathname.split("/").pop().split(".")[0];
console.log(currentPage);

if (currentPage !== "home") {
  const homePageFill = document.getElementById('homePageFill');
  homePageFill.classList.add('outHome');
}

// Vérifier si le nom de la currentPage suivi du mot "Footer" correspond à une des constantes
const footerConstants = ["home", "about", "projects", "archives", "2nd", "1ere", "Term", "contacts"];
const footerMenuItems = [homeFooter, aboutFooter, projectsFooter, archivesFooter, archivesFooter, archivesFooter, archivesFooter, contactsFooter];
for (let i = 0; i < footerConstants.length; i++) {
  if (currentPage === footerConstants[i]) {
    footerMenuItems[i].classList.add("active");
    break;
  }
}

