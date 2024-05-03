/* NOTIFICATION */
function afficherNotif(notif){
    const notification = notif;
    const icone = notification.firstElementChild;

    notification.classList.add("apparait");
    icone.classList.add("decale");

    setTimeout(() => {
        notification.classList.remove("apparait");
    }, 3000)
}




// Fonction pour afficher
function affichageDate() {
    //Recuperation de la date
    var date = localStorage.getItem("date");

    //bloc pour afficher la date
    var dates = document.querySelector(".date");

    dates.innerHTML = date;
}


// Fonction pour stocker la date choisi dans local storage
function setDate() {
    var dateFormSelected = document.getElementById("date").value;

    //Si l'utilisateur n'a pas entrer de date
    if(!dateFormSelected){
        alert("Veuillez selectionner une date future.");

        // Afficher la notif d'échec s'il y a erreur
        var echec = document.querySelector(".notification.echec");
        afficherNotif(echec);

        return;
    }

    //Instencier la date comme objet date
    var dateForm = new Date(dateFormSelected);

    // Si la date inferieur à la date actuel ou bien égale
    if (dateForm <= new Date()) {
        alert("Veuillez selectionner une date future.");

        // Afficher la notif d'échec s'il y a erreur
        var echec = document.querySelector(".notification.echec");
        afficherNotif(echec);

        return;
    }

    //Stocker si tout est clean
    localStorage.setItem("date", dateForm);

    var form = document.querySelector(".formDate");
    form.classList.remove("montrer");

    // si tout est OK afficher la notif
    var success = document.querySelector(".notification.reussite")
    afficherNotif(success);

    affichageDate();
}

/* Afficher lors du chargement de la page */
/* window.onload = affichageDate; */

// TSY MAINTSY NATAO TANY @ PAGE HTML PRINCIPALE LES 2 AFFICHAGES SATRIA MIFAMPI-TAINGINA DE TSY METY