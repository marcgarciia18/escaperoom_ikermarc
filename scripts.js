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

    // Lógica del juego de memoria
    const cards = document.querySelectorAll('.memory-card');

    let hasFlippedCard = false;
    let lockBoard = false;
    let firstCard, secondCard;

    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;

        this.classList.add('flip');

        if (!hasFlippedCard) {
            hasFlippedCard = true;
            firstCard = this;
            return;
        }

        secondCard = this;
        checkForMatch();
    }

    function checkForMatch() {
        let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        isMatch ? disableCards() : unflipCards();
    }

    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);

        resetBoard();
    }

    function unflipCards() {
        lockBoard = true;

        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');

            resetBoard();
        }, 1500);
    }

    function resetBoard() {
        [hasFlippedCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null];
    }

    (function shuffle() {
        cards.forEach(card => {
            let randomPos = Math.floor(Math.random() * 12);
            card.style.order = randomPos;
        });
    })();

    cards.forEach(card => card.addEventListener('click', flipCard));
});
