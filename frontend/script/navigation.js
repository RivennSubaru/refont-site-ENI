/* animation */

//Remise en place de la ligne verticale
window.addEventListener('load', function () {
    var anim = document.getElementById('lignAnim');

    anim.style = 'transform: translateY(0px)';
});

var menuBtn = document.getElementById('menu');
var nav = document.querySelector('#navigation nav');
var menu2 = document.querySelector('.menu2');

var copied = false;
function mediaQuery() {
    const widthFenetre = window.innerWidth;

    if (widthFenetre <= 820) {
        if (copied == false) {
            var navCopy = nav.cloneNode(true);
            menu2.appendChild(navCopy);
            copied = true;

            var nav2 = document.querySelector('.menu2 nav');
        }
    }
}

window.addEventListener('load', mediaQuery);
window.addEventListener('resize', mediaQuery);

// Cacher/montrer la navigation
$(document).ready(function () {
    $('header #menu').click(function () {
        var contenu = $('.menu2 ul');

        if (contenu.is(':visible')){
            contenu.stop().animate({ height:0 }, 300, function () {
                $(this).hide();
                $('.Acceuil-blur').removeClass('montrer');
                $('.mode').show();
            });
        } else {
            contenu.show().css({ height: 0 }).stop().animate({ height: contenu.get(0).scrollHeight }, 300);
            $('.Acceuil-blur').toggleClass('montrer');
            $('.mode').hide();
        }
    });
});