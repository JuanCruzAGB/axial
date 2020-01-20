let AddOn = {
    addButtons: null,
    lessButtons: null,
    /** The AddOn loader. */
    load(){
        this.addButtons = document.querySelectorAll('.add-button');
        for(let i = 0; i < this.addButtons.length; i++){
            this.addButtons[i].addEventListener('click', function(e){
                e.preventDefault();
                AddOn.switch(this);
            });
        }
        this.lessButtons = document.querySelectorAll('.less-button');
        for(let i = 0; i < this.lessButtons.length; i++){
            this.lessButtons[i].addEventListener('click', function(e){
                e.preventDefault();
                AddOn.switch(this);
            });
        }
    },
    /**
     * Switch between add or remove an "estudio".
     * @param {HTMLElement} btn - The button.
     */
    switch(btn){
        if(btn.classList.contains('add-button')){
            this.addEstudio();
        }else{
            this.removeEstudio(btn.parentNode.parentNode);
        }
        let parentClassNames = btn.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList;
        let re = /form-validation-/;
        for(let className of parentClassNames){
            if(re.test(className)){
                Validation.update(className);
            }
        }
        this.changeIcon(btn);
    },
    /**
     * Change the icon from a button.
     * @param {HTMLElement} btn - The button.
     */
    changeIcon(btn){
        if(btn.classList.contains('add-button')){
            btn.classList.remove('add-button');
            btn.classList.add('less-button');
            btn.children[0].classList.remove('fa-plus');
            btn.children[0].classList.add('fa-minus');
        }else{
            btn.classList.remove('less-button');
            btn.classList.add('add-button');
            btn.children[0].classList.remove('fa-minus');
            btn.children[0].classList.add('fa-plus');
        }
    },
    /** Add an "estudio". */
    addEstudio(){
        let rows = document.querySelectorAll('.estudios .row');
        let lastRow;
        for(let i = 0; i < rows.length; i++){
            if((i + 1) == rows.length){
                lastRow = rows[i];
            }
        }
        let row = document.createElement('div');
        row.classList.add('row', 'd-flex', 'justify-content-between', 'mb-3');
        document.querySelector('.estudios').insertBefore(row, lastRow.nextElementSibling);
            let col8 = document.createElement('div');
            col8.classList.add('col-8');
            row.appendChild(col8);
                let input = document.createElement('input');
                input.name = 'estudios[]';
                input.type = 'text';
                input.placeholder = 'Estudio';
                input.classList.add('form-control');
                col8.appendChild(input);
            let col2 = document.createElement('div');
            col2.classList.add('col-2');
            row.appendChild(col2);
                let button = document.createElement('button');
                button.classList.add('add-button');
                col2.appendChild(button);
                button.addEventListener('click', function(e){
                    e.preventDefault();
                    AddOn.switch(this);
                });
                    let icon = document.createElement('i');
                    icon.classList.add('button-icon', 'fas', 'fa-plus');
                    button.appendChild(icon);
    },
    /**
     * Remove an "estudio".
     * @param {HTMLElement} row - The row.
     */
    removeEstudio(row){
        document.querySelector('.estudios').removeChild(row);
    },
};

document.addEventListener('DOMContentLoaded', function(){
    AddOn.load();
});