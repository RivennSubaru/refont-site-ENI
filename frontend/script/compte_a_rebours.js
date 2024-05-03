//Recuperation de la date depuis le lecal storage
var date = localStorage.getItem("date");

// Recuperer le temps 
const deadline = new Date(date).getTime();

// maj du compte à rebours toutes les secondes
const compteRebours = setInterval(() => {
    const maintenant = new Date().getTime();
    const distance = deadline - maintenant;

    // Calculs du temps restant
    const jours = Math.floor(distance / (1000 * 60 * 60 * 24));
    const heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const secondes = Math.floor((distance % (1000 * 60)) / 1000);

    // Affichage
    var dates = document.querySelectorAll(".date");
    
    dates[0].innerHTML = jours + "<br> jours";
    dates[1].innerHTML = heures + "<br> heures";
    dates[2].innerHTML = minute + "<br> minutes";
    dates[3].innerHTML = secondes + "<br> secondes";

    //Si le comptes à rebours est terminé, afficher un message
    if (distance < 0) {
        clearInterval(compteRebours);
        document.querySelector(".temps").innerHTML = "EXPIRÉ";
    }
}, 1000);