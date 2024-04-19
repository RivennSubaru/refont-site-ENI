/* recuperation de tout les sections */
var sections = document.querySelectorAll('section');

window.addEventListener('load', function () {
    var top = this.window.scrollY; /* recuperation du nombre de pixel après le défilement */
    var positionH2 = sections[0].offsetTop - 150;  /* position de la section contenant h2 par rapport à body */
    var heightH2 = sections[0].offsetHeight; /* la taille complet de la section contenant h2 */

    if (top >= positionH2 && top <= positionH2 + heightH2) {    /* Vérifier si la section est actuellement visible */
        sections[0].classList.add('montrer-anime'); /* si oui, donner la classe qui anime */

    } else{
        this.window.addEventListener('scroll', function () { /* Sinon scroller jusqu'à ce qu'elle soit visible */

            if (top >= positionH2 && top <= positionH2 + heightH2) { /* Condition de la visibilité */

                sections[0].classList.add('montrer-anime');
            }
        })
    }
})

/* Les autres élement */
window.addEventListener('scroll', function () {
    sections.forEach(sec => {
        var top = this.window.scrollY;
        var positionSec = sec.offsetTop - 300;
        var heightSec = sec.offsetHeight;

        if (top >= positionSec && top <= positionSec + heightSec) {
            if (sec.className != 'Acceuil-blur') {
                sec.classList.add('montrer-anime');
            }
        }
    })
})