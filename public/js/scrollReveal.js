// ScrollReveal

window.sr = ScrollReveal();

sr.reveal('.especialidades .cards .cartas-servicios .card-body', {
    duration: 2000,
    distance: '300px',
    origin: 'left'
});

sr.reveal('.lista-patologias', {
    duration: 2000,
    distance: '300px',
    origin: 'left'
});

sr.reveal('.aux-img', {
    duration: 2000,
    distance: '300px',
    origin: 'right'
});

sr.reveal('#equipo', {
    duration: 2000,
    distance: '300px',
    origin: 'bottom'
});

// let scrollReveal = new ScrollReveal([
//     {
//         'HTMLElement': '.especialidades .cards .cartas-servicios .card-body',
//     },{
//         'HTMLElement': '.lista-patologias',
//     },{
//         'HTMLElement': '.img-patologia',
//         'origin': 'right',
//         'distance': '10px',
//     },
// ], 2000, '300px', 'left');