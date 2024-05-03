function affichage() {
    var date = localStorage.getItem("date");

    var dates = document.querySelectorAll(".date");

    const compteRebours = setInterval(() => {
        const deadline = new Date(date).getTime();
        const maintenant = new Date().getTime();

        const distance = deadline - maintenant;

        // Calculs du temps restant
        const jours = Math.floor(distance / (1000 * 60 * 60 * 24));
        const heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const secondes = Math.floor((distance % (1000 * 60)) / 1000);

        dates[0].innerHTML = jours + "<br> jours";
        dates[1].innerHTML = heures + "<br> heures";
        dates[2].innerHTML = minutes + "<br> minutes";
        dates[3].innerHTML = secondes + "<br> secondes";

        //Si le comptes à rebours est terminé, afficher un message
        if (distance < 0) {
            clearInterval(compteRebours);
            document.getElementById("temps").innerHTML = "EXPIRÉ";
        }
    }, 1000);
}

function setDate() {
    var dateFormSelected = document.getElementById("date").value;

    if(!dateFormSelected){
        alert("Veuillez selectionner une date future.");
        return;
    }

    var dateForm = new Date(dateFormSelected);

    if (dateForm <= new Date()) {
        alert("Veuillez selectionner une date future.");
        return;
    }
    localStorage.setItem("date", dateForm);

    affichage();
}