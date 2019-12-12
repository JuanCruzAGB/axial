let Collapsable = {
    /** @var {array} HTMLs - Collapsable array of HTML elements. */
    HTMLs: [],
    /** @var {HTMLElement} btns - Collapsable array of buttons. */
    btns: [],
    /** Collapsable loader */
    load(){
        this.HTMLs = document.querySelectorAll('.collapsable');
        this.btns = document.querySelectorAll('.collapsable .collapsable-button');
        
        for(let i = 0; i < this.btns.length; i++){
            this.btns[i].addEventListener("click", function(e){
                e.preventDefault();
                Collapsable.switch(i);
            })
        }
    },
    /**
     * Check if there is Sidebar.
     * @return {boolean}
     */
    hasHTMLElement(){
        if(document.querySelector('.collapsable')){
            return true;
        }else{
            return false;
        }
    },
    /**
     * Switch between open and close.
     * @param {numeric} position - Collapsable position on the array.
     */
	switch(position){
        if(this.HTMLs[position].classList.contains('opened')){
            this.close(position);
        }else{
            this.open(position);
        }
    },
    /**
     * Open the Collapsable.
     * @param {numeric} position - Collapsable position on the array.
     */
    open(position){
        this.btns[position].children[0].classList.remove('fa-sort-down');
        this.HTMLs[position].classList.remove('closed');
        this.btns[position].children[0].classList.add('fa-sort-up');
        this.HTMLs[position].classList.add('opened');
    },
    /**
     * Close the Collapsable.
     * @param {numeric} position - Collapsable position on the array.
     */
    close(position){
        this.btns[position].children[0].classList.remove('fa-sort-up');
        this.HTMLs[position].classList.remove('opened');
        this.btns[position].children[0].classList.add('fa-sort-down');
        this.HTMLs[position].classList.add('closed');
    },
};

let Sidebar = {
    /** @var {HTMLElement} HTML - Sidebar HTML element. */
    HTML: null,
    /** @var {HTMLElement} btnOpener - Button opener. */
    btnOpener: null,
    /** @var {HTMLElement} btnCloser - Button opener. */
    btnCloser: null,
    /** @var {HTMLElement[]} links - All the links inside the Sidebar. */
    links: null,
    /** Sidebar loader */
    load(){
        this.HTML = document.querySelector('.nav-menu .sidebar');
        this.btnOpener = document.querySelector('.nav-menu > .sidebar-button');
        this.btnCloser = document.querySelector('.nav-menu .sidebar .sidebar-button');
        this.links = document.querySelectorAll('.nav-menu .sidebar .sidebar-content .nav-link');

        this.btnOpener.addEventListener("click", function(e){
            e.preventDefault();
            Sidebar.open();
        })

        for(let i = 0; i< this.links.length; i++){
            this.links[i].addEventListener('click', function(e){
                console.log('click');
                Sidebar.close();
            });
        }
    },
    /**
     * Check if there is Sidebar.
     * 
     * @return {boolean}
     */
    hasHTMLElement(){
        if(document.querySelector('.sidebar')){
            return true;
        }else{
            return false;
        }
    },
    /** Open the Sidebar. */
	open(){
        Sidebar.HTML.classList.add('opened');
        Sidebar.HTML.classList.remove('closed');

        this.btnCloser.addEventListener("click", function(e){
            e.preventDefault();
            Sidebar.close();
        })
    },
    /** Close the Sidebar. */
    close(){
        Sidebar.HTML.classList.remove('opened');
        Sidebar.HTML.classList.add('closed');
    },
};

document.addEventListener('DOMContentLoaded', function(){
    if(Collapsable.hasHTMLElement()){
        Collapsable.load();
    }
    if(Sidebar.hasHTMLElement()){
        Sidebar.load();
    }
});