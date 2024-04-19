/* VALIDATION (Contrainte) */
function validation() {
    var nom = document.getElementById('nom').value;
    var comp = document.getElementById('comp').value;

    if (nom.trim() === "") {
        alert("Le champ nom doit être rempli");
        return false;
    }
    if (comp.trim() === "") {
        alert("Le champ compétence ou matière enseignée doit être rempli");
        return false;
    }
    if(/^[^a-zA-Z]+$/.test(nom)){
        alert("Le nom de l'enseignant ne peut contenir que des lettres");
        return false;
    }
    if (/^[0-9]+$/.test(comp)) {
        alert("La compétence ne peut contenir que des lettres");
        return false;
    } else if (/^[0-9]/.test(comp)) {
        alert("La competence ne peut pas commencer par un chiffre");
        return false;
    }

    return true;
}

/* Affichage de l'enseignant */
function affichage() {
    var listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];
    var parent = document.querySelector('.page-enseignant .bloc-enseignant');

    var ajouterEnseignant = parent.querySelector('.ajouter-enseignant');
    var ajoutBtn = parent.removeChild(ajouterEnseignant);

    parent.innerHTML = '';
    

    listEnseign.forEach(function (element, index) {
        var profile = document.createElement('div');
        profile.classList.add('profile');

        var boutons = document.createElement('div');
        boutons.classList.add('bouton');

        var icone1 = document.createElement('i');
        icone1.classList.add('fa-solid', 'fa-pen-to-square');
        icone1.addEventListener('click', function() {
            maj(index);
        });

        var icone2 = document.createElement('i');
        icone2.classList.add('fa-solid', 'fa-xmark');
        icone2.addEventListener('click', function() {
            supp(index);
        });

        boutons.appendChild(icone1);
        boutons.appendChild(icone2);

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

        profile.appendChild(boutons);
        profile.appendChild(content);

        parent.appendChild(profile);
    });

    parent.appendChild(ajoutBtn);
}

/* Afficher lors du chargement de la page */
window.onload = affichage;

/* Fonction de récupération d'URL d'image */
function recupImgSrc(image, callback) {
    var imgInput = image,
        img = imgInput.files[0];
        
    if (img) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var imgSrc = e.target.result;
            callback(imgSrc); // Appel du callback avec l'URL de l'image
        }
        reader.readAsDataURL(img);
    }
}

/* Fonction ajouter */
function ajouter() {
    /* Si le formulaire est valide */
    if (validation()) {
        var nom = document.getElementById('nom').value;
        var comp = document.getElementById('comp').value;

        recupImgSrc(document.getElementById('img'), function(imgSrc) {
            var listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];

            listEnseign.push({
                nom: nom,
                comp: comp,
                imgSrc: imgSrc
            });

            localStorage.setItem("listeEnseign", JSON.stringify(listEnseign));
            affichage();
            document.getElementById('nom').value = "";
            document.getElementById('comp').value = "";
        });
    }
}

/* Fonction de mise à jour */
function maj(index) {
    var listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];
    var nom = prompt("Entrez le nouveau nom :");
    var comp = prompt("Entrez la nouvelle compétence ou matière enseignée :");

    if (nom !== null && comp !== null) { // Si l'utilisateur n'a pas annulé la saisie
        listEnseign[index].nom = nom;
        listEnseign[index].comp = comp;
        localStorage.setItem("listeEnseign", JSON.stringify(listEnseign));
        affichage(); // Rafraîchir l'affichage après la mise à jour
    }
}

/* Fonction de suppression */
function supp(index) {
    var confirmation = confirm("Êtes-vous sûr de vouloir supprimer cet enseignant ?");
    if (confirmation) {
        var listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];
        listEnseign.splice(index, 1); // Supprimer l'enseignant du tableau
        localStorage.setItem("listeEnseign", JSON.stringify(listEnseign));

        /* Forcer la recupération des données depuis localStorage après la suppression */
        listEnseign = JSON.parse(localStorage.getItem("listeEnseign")) || [];
        
        affichage(); // Rafraîchir l'affichage après la suppression
    }
}

var ajoutBtn = document.querySelector('.ajouter-enseignant');
ajoutBtn.classList.add('profile');
var formulaire = document.querySelector('section.Sec-formulaire')

ajoutBtn.addEventListener('click', function () {
    formulaire.classList.add('montrer-anime');
});

var fermerForm = document.querySelector('.Sec-formulaire .fermer');

fermerForm.addEventListener('click', function () {
    formulaire.classList.remove('montrer-anime');
})