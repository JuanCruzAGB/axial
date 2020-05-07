let Tabs = {
    HTMLElements: [],
    load(){
        let aux = document.querySelectorAll('.menu-servicios-detallados li button');
        for(const tab of aux){
            this.HTMLElements.push(tab);
            Tabs.addEvent(tab);
        }
    },
    addEvent(button){
        button.addEventListener('click', function(e){
            e.preventDefault();
            Tabs.change(this);
            Content.change(this);
        });
    },
    change(button){
        for(const tab of this.HTMLElements){
            if(button == tab){
                tab.classList.add('active');
            }else{
                tab.classList.remove('active');
            }
        }
    },
    /** Get if the URL has an #. */
    getTarget(){
        let href = location.href;
        let target = href.split('#');
        if(target.length > 1){
            target = target[1];
            for(let i = 0; i < this.HTMLElements.length; i++){
                if(this.HTMLElements[i].dataset.content == target){
                    Tabs.change(this.HTMLElements[i]);
                    Content.change(this.HTMLElements[i]);
                }
            }
        }
    },
}, Content = {
    HTMLElements: [],
    load(){
        let aux = document.querySelectorAll('.content');
        for(let int = 0; int < aux.length; int++){
            let content = aux[int];
            this.HTMLElements.push(content);
            content.dataset.height = $(content).outerHeight();
        }
    },
    change(button){
        for(let i = 0; i < this.HTMLElements.length; i++){
            const content = this.HTMLElements[i];
            if(button.dataset.content == content.id){
                content.classList.add('active');
                this.calculateHeight(content);
            }else{
                content.classList.remove('active');
            }
        }
    },
    calculateHeight(content){
        content.parentNode.style.setProperty('--content-height', content.dataset.height + 'px');
    }
};
let Animate = {
    fadeIn(element){
        let op = 0;
        let timer = setInterval(function(){
            if(op >= 1.0){
                clearInterval(timer);
                element.classList.add('active');
            }
            element.style.opacity = op;
            console.log('alpha(opacity=' + 1 + ")");
            element.style.filter = 'alpha(opacity=' + 1 + ")";
            op += 0.1;
        }, 50);
    },
    fadeOut(element){
        let op = 1;
        let timer = setInterval(function(){
            if(op <= 0.1){
                clearInterval(timer);
                element.classList.remove('active');
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op + ")";
            op -= 0.05;
        }, 50);
    },
};
document.addEventListener('DOMContentLoaded', function(){
    Tabs.load();
    Content.load();
    Tabs.getTarget();
    let aux = document.querySelector('.content');
    aux.dataset.height = $(aux).outerHeight();
    Content.calculateHeight(aux);
});