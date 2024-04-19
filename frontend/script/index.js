var bouton1 = document.querySelector('#Acceuil a.btn1'),
    bouton2 = document.querySelector('#Acceuil a.btn2');


    // Evenement de changement de couleur des boutons du debut
bouton1.addEventListener('mouseover', function (e) {

    if ((bouton1.style.color == 'white') && (bouton1.style.background == 'rgb(74, 74, 136)')) {
        e.currentTarget.style.color = 'white';
        e.currentTarget.style.background = 'rgb(0 212 138)';
        bouton2.style.color = 'white';
        bouton2.style.background = 'rgb(74, 74, 136)';
    }
    else{
        e.currentTarget.style.color = 'white';
        e.currentTarget.style.background = 'rgb(74, 74, 136)';
        bouton2.style.color = 'white';
        bouton2.style.background = 'rgb(0 212 138)';
    }
});


bouton2.addEventListener('mouseover', function (e) {
    if ((bouton2.style.color == 'white') && (bouton2.style.background == 'rgb(0 212 138)')) {
        e.currentTarget.style.color = 'white';
        e.currentTarget.style.background = 'rgb(74, 74, 136)';
        bouton1.style.color = 'white';
        bouton1.style.background = 'rgb(0 212 138)';
    }
    else{
        e.currentTarget.style.color = 'white';
        e.currentTarget.style.background = 'rgb(0 212 138)';
        bouton1.style.color = 'white';
        bouton1.style.background = 'rgb(74, 74, 136)';
    }
});

/* ANNIMATION TITRE */

/* recuperation de tout les sections */
var sections = document.querySelectorAll('section');

window.addEventListener('load', function () {
    var top = this.window.scrollY; /* recuperation du nombre de pixel après le défilement */
    var position = sections[0].offsetTop - 150;  /* position de la section contenant h2 par rapport à body */
    var height = sections[0].offsetHeight; /* la taille complet de la section contenant h2 */

    var titre = this.document.querySelector('.Acceuil-blur h2'),
    lorem = this.document.getElementById('lorem'),
    boutonAcc = this.document.querySelectorAll('.Acceuil-blur .btn .boutons');


    if (top >= position && top <= position + height) {    /* Vérifier si la section est actuellement visible */
        titre.classList.add('montrer-anime');

        this.setTimeout(function () {
            lorem.classList.add('montrer-anime');
        }, 1000);

        this.setTimeout(function () {
            boutonAcc.forEach(btn => {
                btn.classList.add('montrer-anime');
            });
        }, 1050);

    } else{
        
        this.window.addEventListener('scroll', function () { /* Sinon scroller jusqu'à ce qu'elle soit visible */

            if (top >= position && top <= position + height) { /* Condition de la visibilité */
                titre.classList.add('montrer-anime');

                this.setTimeout(function () {
                    lorem.classList.add('montrer-anime');
                }, 1000);
        
                this.setTimeout(function () {
                    boutonAcc.forEach(btn => {
                        btn.classList.add('montrer-anime');
                    });
                }, 1050);
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

/* Compte à rebours */
/* var sec = document.querySelector('#inscription .rappel .temps .date.sec');
 */