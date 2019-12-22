let Tabs = {
    /** @var {HTMLElement[]} - Array of tab-button HTML Elements. */
    buttons: [],
    /** @var {HTMLElement[]} - Array of tab-content HTML Elements. */
    contents: [],
    /** Tabs loader */
    load(){
        this.buttons = document.querySelectorAll('.tabs .tab-menu .tab-button');
        this.contents = document.querySelectorAll('.tabs .tab-body .tab-content');
        for(let i = 0; i < this.buttons.length; i++){
            this.buttons[i].addEventListener('click', function(e){
                e.preventDefault();
                Tabs.switch(i);
            });
        }
        this.getTarget();
    },
    /**
     * Switch between open and close elements.
     * @param {numeric} number - Tab-button position in the array of this.buttons.
     */
    switch(number){
        for(let i = 0; i < this.buttons.length; i++){
            if(this.buttons[i].classList.contains('opened')){
                this.close(number);
            }else if(i == number){
                this.open(number);
            }
        }
    },
    /**
     * Open a new content.
     * @param {numeric} number - Tab-button position in the array of this.buttons.
     */
    open(number){
        for(let i = 0; i < this.buttons.length; i++){
            if(this.buttons[i].classList.contains('opened') && i != number){
                this.close(i);
            }
        }
        this.buttons[number].classList.remove('closed');
        this.buttons[number].classList.add('opened');
        let href = this.buttons[number].href.split("#").pop();
        for(let i = 0; i < this.contents.length; i++){
            if(this.contents[i].id == href){
                this.contents[i].classList.remove('closed');
                this.contents[i].classList.add('opened');
            }
        }
    },
    /**
     * Close the current content opened.
     * @param {numeric} number - Tab-button position in the array of this.buttons.
     */
    close(number){
        this.buttons[number].classList.remove('opened');
        this.buttons[number].classList.add('closed');
        let href = this.buttons[number].href.split("#").pop();
        for(let i = 0; i < this.contents.length; i++){
            if(this.contents[i].id == href){
                this.contents[i].classList.remove('opened');
                this.contents[i].classList.add('closed');
            }
        }
    },
    /** Get if the URL has an #. */
    getTarget(){
        let href = location.href;
        let target = href.split('#');
        if(target.length > 1){
            target = target[1];
            for(let i = 0; i < this.contents.length; i++){
                if(this.contents[i].classList.contains(target)){
                    for(let j = 0; j < this.buttons.length; j++){
                        if(this.buttons[j].href.split("#").pop() == target){
                            this.open(j);
                        }
                    }
                }
            }
        }
    },
};

function observe(element, event, handler){
    element.addEventListener(event, handler);
};

let Modal = {
    /** @var {HTMLElement[]} openButtons - Modal open buttons. */
    openButtons: null,
    /** @var {HTMLElement} confirmButton - Modal confirm button. */
    confirmButton: null,
    /** @var {HTMLElement} cancleButton - Modal cancel button. */
    cancleButton: null,
    /** Modal's loader */
    load(){
        this.openButtons = document.querySelectorAll('[data-toggle=modal]');
        for(let i = 0; i < this.openButtons.length; i++){
            this.openButtons[i].addEventListener('click', function(e){
                Modal.open(this);
            });
        }
        this.confirmButton = document.querySelector('.confirm-button');
        this.confirmButton.addEventListener('click', function(e){
            Modal.confirm();
        });
        this.cancleButton = document.querySelector('.cancel-button');
    },
    /**
     * Open the modal.
     * @param {HTMLElement} btn - The button.
     */
    open(btn){
        document.querySelector('.modal-title').innerHTML = btn.dataset.title;
        document.querySelector('.modal-body').innerHTML = btn.dataset.body;
        document.querySelector('.modal').dataset.url = btn.dataset.url;
    },
    /** Create and send the delete form. */
    confirm(){
        let form = document.createElement('form');
        form.classList.add('delete-modal-form');
        form.action = document.querySelector('.modal').dataset.url;
        form.method = 'post';
        form.style.display = 'none';
        document.querySelector('.modal').appendChild(form);
            let method = document.createElement('input');
            form.appendChild(method);
            method.type = "hidden";
            method.name = "_method";
            method.value = "DELETE";
            
            let csrf = document.createElement('input');
            form.appendChild(csrf);
            csrf.type = "hidden";
            csrf.name = "_token";
            csrf.value = document.querySelector('[name=csrf-token]').content;
        form.submit();
    },
};

document.addEventListener('DOMContentLoaded', function(){
    Tabs.load();
    Modal.load();
});