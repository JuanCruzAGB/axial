let CollapsableCard = {
    /** @var {HTMLElement[]} cards - The collapsable cards. */
    cards: null,
    /** @var {HTMLElement[]} btns - The collapsable cards btns. */
    btns: null,
    /** CollapsableCard's loader. */
    load(){
        this.cards = document.querySelectorAll('.collapsable-card');
        this.btns = document.querySelectorAll('.collapsable-card .collapsable-btn');
        for(let i = 0; i < this.btns.length; i++){
            this.btns[i].addEventListener('click', function(e){
                e.preventDefault();
                CollapsableCard.switch(i);
            });
        }
        let href = window.location.href.split("#").pop();
        for(let i = 0; i < this.cards.length; i++){
            if(this.cards[i].id == href){
                CollapsableCard.switch(i);
            }
        }
    },
    /**
     * Switch between Close and open the collapsable card.
     * @param {number} position - The position from the this.cards array.
     */
    switch(position){
        if(!this.cards[position].classList.contains('active')){
            this.open(position);
        }else{
            this.close(position);
        }
    },
    /**
     * Open the collapsable card.
     * @param {number} position - The position from the this.cards array.
     */
    open(position){
        this.cards[position].classList.add('active');
        this.btns[position].children[0].children[0].classList.remove('fa-angle-up');
        this.btns[position].children[0].children[0].classList.add('fa-angle-down');
    },
    /**
     * Close the collapsable card.
     * @param {number} position - The position from the this.cards array.
     */
    close(position){
        this.cards[position].classList.remove('active');
        this.btns[position].children[0].children[0].classList.remove('fa-angle-down');
        this.btns[position].children[0].children[0].classList.add('fa-angle-up');
    },
};

class ShowInfo{
    /**
     * Creates an instance of ShowInfo.
     * @memberof ShowInfo
     */
    constructor(){
        this.btns = document.querySelectorAll('.show-data');
        for(const btn of this.btns){
            this.addEvent(btn);
        }
    };
    /**
     * Add the event to the btn.
     * @param {HTMLElement} btn - The button clicked.
     * @memberof ShowInfo
     */
    addEvent(btn){
        btn.addEventListener('click', function(e){
            e.preventDefault();
            ShowInfo.switch(this);
        });
    };
    /**
     * Switch between show or hide adction.
     * @static
     * @param {HTMLElement} btn - The button clicked.
     * @memberof ShowInfo
     */
    static switch(btn){
        let href = btn.href.split("#").pop();
        if(!btn.classList.contains('clicked')){
            btn.classList.add('clicked');
            btn.children[0].children[0].classList.add('fa-angle-down');
            btn.children[0].children[0].classList.remove('fa-angle-up');
            ShowInfo.show(href);
        }else{
            btn.classList.remove('clicked');
            btn.children[0].children[0].classList.add('fa-angle-up');
            btn.children[0].children[0].classList.remove('fa-angle-down');
            ShowInfo.hide(href);
        }
    };
    /**
     * Show the data.
     * @static
     * @param {string} id - The data's ID.
     * @memberof ShowInfo
     */
    static show(id){
        document.querySelector('#' + id).classList.remove('invisible');
    };
    /**
     * Hide the data.
     * @static
     * @param {string} id - The data's ID.
     * @memberof ShowInfo
     */
    static hide(id){
        document.querySelector('#' + id).classList.add('invisible');
    };
};

document.addEventListener('DOMContentLoaded', function(){
    CollapsableCard.load();
    let showinfo = new ShowInfo();
});