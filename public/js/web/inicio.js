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
        this.btns[position].children[1].classList.remove('fa-sort-up');
        this.btns[position].children[1].classList.add('fa-sort-down');
    },
    /**
     * Close the collapsable card.
     * @param {number} position - The position from the this.cards array.
     */
    close(position){
        this.cards[position].classList.remove('active');
        this.btns[position].children[1].classList.remove('fa-sort-down');
        this.btns[position].children[1].classList.add('fa-sort-up');
    },
};

document.addEventListener('DOMContentLoaded', function(){
    CollapsableCard.load();
});