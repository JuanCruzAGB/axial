
document.addEventListener('DOMContentLoaded', function(){
    
    let href = location.href,
        target = href.split('#'),
        miembros = document.querySelectorAll('.miembro'),
        doScroll = false,
        to = null;
    if(target.length > 1 && miembros.length){
        target = target[1];
        for(const miembro of miembros){
            if(target == miembro.id){
                doScroll = true;
                to = miembro;
            }
        }
    }
    if(doScroll){
        let pixels = (16 * 4.8) + 50;
        SmoothScroll.scrollTo(to, pixels);
    }
});