// Sélectionnez les éléments nécessaires
var burger = document.querySelector('.burger');
var circled = document.querySelector('.circled');
var tiles = document.querySelector('.tiles');

// Ajoutez un gestionnaire d'événements click à la div burger
burger.addEventListener('click', function() {
    // Basculer l'affichage des images burger et circled
    if (burger.style.display !== 'none') {
        burger.style.display = 'none';
        circled.style.display = 'block';
    } else {
        burger.style.display = 'block';
        circled.style.display = 'none';
    }

    // Ajouter ou supprimer la classe active de la div tiles
    tiles.classList.toggle('active');
});

// Ajoutez un gestionnaire d'événements click à l'élément circled
circled.addEventListener('click', function() {
    // Basculer l'affichage des images burger et circled
    if (circled.style.display !== 'none') {
        circled.style.display = 'none';
        burger.style.display = 'block';
    } else {
        circled.style.display = 'block';
        burger.style.display = 'none';
    }

    // Ajouter ou supprimer la classe active de la div tiles
    tiles.classList.toggle('active');
});