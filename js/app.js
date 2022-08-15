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

function cargarScrollRevealContacto(sr) {
    sr.reveal('.container',{
        duration:2000,
        origin: 'left',
        distance:'800px'
    });
}

function guardarFormContacto(btn) {
    document.getElementById('form-btn').addEventListener('submit', function(event) {
        event.preventDefault();
        btn.value = 'Enviando...';

        const serviceID = 'default_service';
        const templateID = 'template_2xqnum2';

        emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
            btn.value = 'Enviar mensaje';
            alert('Enviado!');
        }, (err) => {
            btn.value = 'Enviar mensaje';
            alert(JSON.stringify(err));
        });
    });
}

function cargarScrollRevealCanales(sr) {
    sr.reveal('#navHeaderCanales',{
        duration:2000,
        origin: 'left',
        distance:'800px'
    });
    sr.reveal('.card1',{
        duration:2000,
        origin: 'left',
        distance:'200px'
    }); 
    sr.reveal('.card2',{
        duration:2000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:2000,
        origin: 'right',
        distance:'200px'
    });
}

function cargarScrollRevealColaboradores(sr) {
    sr.reveal('#boxps1',{
        duration:2000,
        origin: 'left',
        distance:'50px'
    });
    sr.reveal('#boxps2',{
        duration:2000,
        origin: 'top',
        distance:'100px'
    });
    sr.reveal('#boxps3',{
        duration:2000,
        origin: 'right',
        distance:'50px'
    });
    sr.reveal('#fondoprof1',{
        duration:2000,
        origin: 'left',
        distance:'50px'
    });
}

function cargarScrollRevealEstudiantes(sr) {
    sr.reveal('.card1',{
        duration:2000,
        origin: 'left',
        distance:'200px'
    });
    sr.reveal('.card2',{
        duration:2000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:2000,
        origin: 'right',
        distance:'200px'
    }); 
}

function cargarScrollRevealNiveles(sr) {
    sr.reveal('.card1',{
        duration:2000,
        origin: 'left',
        distance:'200px'
    });
    sr.reveal('.card2',{
        duration:2000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:2000,
        origin: 'right',
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
