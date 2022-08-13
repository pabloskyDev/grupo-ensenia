function cargarScrollRevealIndex(sr) {
    sr.reveal('#carousel-index',{
        duration:2000,
        origin: 'left',
        distance:'800px'
    });
    
    sr.reveal('.card1',{
        duration:2000,
        origin: 'top',
        distance:'200px'
    });
    
    sr.reveal('.card2',{
        duration:2000,
        origin: 'bottom',
        distance:'200px'
    });
    
    sr.reveal('.card3',{
        duration:2000,
        origin: 'top',
        distance:'200px'
    });
}

function textWrapper() {
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
   .add({
        targets: '.ml .letter',
        scale: [0, 1],
        duration: 2500,
        elasticity: 800,
        delay: (el, i) => 100 * (i+1)
    }).add({
        targets: '.ml',
        opacity: 0,
        duration: 2000,
        easing: "easeOutExpo",
        delay: 1000
    });
}
