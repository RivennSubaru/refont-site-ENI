/* Affichage de l'enseignant */
function affichage() {
    var listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];
    var parent = document.querySelector('.page-enseignant .bloc-enseignant');

    parent.innerHTML = '';
    

    listEnseign.forEach(function (element, index) {
        var profile = document.createElement('div');
        profile.classList.add('profile');

        var content = document.createElement('div');
        content.classList.add('content');

        var image = document.createElement('img');
        image.src = element.imgSrc;

        var h6 = document.createElement('h6');
        h6.textContent = element.nom;

        var para = document.createElement('p');
        para.textContent = element.comp;

        var social = document.createElement('div');
        social.classList.add('pro-liens');

        var social1 = document.createElement('i');
        social1.classList.add('fab', 'fa-facebook');

        var social2 = document.createElement('i');
        social2.classList.add('fab', 'fa-instagram');

        var social3 = document.createElement('i');
        social3.classList.add('fab', 'fa-twitter');

        social.appendChild(social1);
        social.appendChild(social2);
        social.appendChild(social3);

        content.appendChild(image);
        content.appendChild(h6);
        content.appendChild(para);
        content.appendChild(social);

        profile.appendChild(content);

        parent.appendChild(profile);
    });
}

/* Afficher lors du chargement de la page */
window.onload = affichage;