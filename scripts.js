document.addEventListener('DOMContentLoaded', function() {
    // Mostrar pista en pantalla2.php
    if (document.querySelector('.pista')) {
        document.querySelector('.pista').style.display = 'block';
    }

    // Mostrar pista en pantalla3.php
    if (document.querySelector('.pista')) {
        document.querySelector('.pista').style.display = 'block';
    }

    // Mostrar pista en pantalla4.php
    if (document.querySelector('.pista')) {
        document.querySelector('.pista').style.display = 'block';
    }

    // Ocultar intro en index.php
    if (document.querySelector('.netflix-intro')) {
        setTimeout(function() {
            document.querySelector('.netflix-intro').style.display = 'none';
        }, 5000);
    }

    // Animación de confeti en has-ganado.php
    if (document.querySelector('#has-ganado')) {
        function launchConfetti() {
            var duration = 5 * 1000;
            var end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 3,
                    angle: 60,
                    spread: 55,
                    origin: { x: 0 }
                });
                confetti({
                    particleCount: 3,
                    angle: 120,
                    spread: 55,
                    origin: { x: 1 }
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        }

        launchConfetti();
    }
});
