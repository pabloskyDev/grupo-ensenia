var zoom = 1;

function cargarScrollRevealIndex(sr) {
    sr.reveal('#carousel-index',{
        duration:4000,
        origin: 'left',
        distance:'800px'
    });
    
    sr.reveal('.card1',{
        duration:4000,
        origin: 'top',
        distance:'200px'
    });
    
    sr.reveal('.card2',{
        duration:4000,
        origin: 'bottom',
        distance:'200px'
    });
    
    sr.reveal('.card3',{
        duration:4000,
        origin: 'top',
        distance:'200px'
    });
}

function cargarScrollRevealContacto(sr) {
    sr.reveal('.container',{
        duration:4000,
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
        duration:4000,
        origin: 'left',
        distance:'800px'
    });
    sr.reveal('.card1',{
        duration:4000,
        origin: 'left',
        distance:'200px'
    }); 
    sr.reveal('.card2',{
        duration:4000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:4000,
        origin: 'right',
        distance:'200px'
    });
}

function cargarScrollRevealColaboradores(sr) {
    sr.reveal('#boxps1',{
        duration:4000,
        origin: 'left',
        distance:'50px'
    });
    sr.reveal('#boxps2',{
        duration:4000,
        origin: 'top',
        distance:'100px'
    });
    sr.reveal('#boxps3',{
        duration:4000,
        origin: 'right',
        distance:'50px'
    });
    sr.reveal('#fondoprof1',{
        duration:4000,
        origin: 'left',
        distance:'50px'
    });
}

function cargarScrollRevealEstudiantes(sr) {
    sr.reveal('.card1',{
        duration:4000,
        origin: 'left',
        distance:'200px'
    });
    sr.reveal('.card2',{
        duration:4000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:4000,
        origin: 'right',
        distance:'200px'
    }); 
}

function cargarScrollRevealNiveles(sr) {
    sr.reveal('.card1',{
        duration:4000,
        origin: 'left',
        distance:'200px'
    });
    sr.reveal('.card2',{
        duration:4000,
        origin: 'bottom',
        distance:'200px'
    });
    sr.reveal('.card3',{
        duration:4000,
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
        duration: 5000,
        elasticity: 800,
        delay: (el, i) => 100 * (i+1)
    }).add({
        targets: '.ml',
        opacity: 0,
        duration: 5000,
        easing: "easeOutExpo",
        delay: 1000
    });
}
function modoOscuro(tipo, tema) {
    switch (tipo) {
        
        case 1: // index
            let bgIndex = $('.bg-nav');

            if(tema == 'dark'){
                bgIndex.addClass('bg-oscuro');
                if(bgIndex.hasClass("bg-oscuro")){
                    // $('#temaPage').removeAttr('onClick');
                    $('#temaPage').on("click", () => {
                        modoOscuro(1, 'light')
                    });
                }
            }else{
                console.log('ENTRA');
                // bgIndex.removeClass('bg-oscuro');
                // $('#temaPage').on("click", () => {
                //     bgIndex.addClass('bg-oscuro');
                //     modoOscuro(1, 'dark')
                // });
            }

            /*if(tema == 'dark'){
                bgIndex.addClass('bg-oscuro');

                $('#temaPage').removeAttr('onClick');
                document.getElementById('bfCaptchaEntry').onclick = modoOscuro(1, 'light');
                // $('#temaPage').on('onClick', modoOscuro(1, 'light'));
            }else if(tema == 'light'){
                // bgIndex.removeClass('bg-oscuro');
            }*/
            
            
            break;
    
        default:
            break;
    }
}

function aumentar(){
    zoom+=.10;
    resize();
}

function disminuir(){
    if(zoom >0.2) {
        zoom-=.10;
        resize();
    }
}

function resize() {
    document.getElementById("bodyPpal").style.zoom=zoom;
}