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
}, Content = {
    HTMLElements: [],
    load(){
        let aux = document.querySelectorAll('.content');
        for(const content of aux){
            this.HTMLElements.push(content);
        }
    },
    change(button){
        for(let i = 0; i < this.HTMLElements.length; i++){
            const content = this.HTMLElements[i];
            if(button.dataset.content == content.id){
                content.classList.add('active');
            }else{
                content.classList.remove('active');
            }
        }
    },
};
document.addEventListener('DOMContentLoaded', function(){
    Tabs.load();
    Content.load();
});