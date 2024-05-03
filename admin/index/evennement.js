/* Bloc formulaire */
var form = document.querySelector(".formDate");

/* Boutons pour afficher le formulaire */
var btnAffich = document.querySelector(".modif");

btnAffich.addEventListener("click", function () {
    form.classList.add("montrer");
});

/* Boutons pour fermer le formulaire */
var btnFermer = document.querySelector(".fermer");

btnFermer.addEventListener("click", function () {
    form.classList.remove("montrer");
});
