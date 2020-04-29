class ScrollRevealJS{
    constructor(){
        this.animate();
    }
    animate(){
        sr.reveal(elemento, {
            duration: duracion,
            distance: distancia,
            origin: origen,
        });
    }
}