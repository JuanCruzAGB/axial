String.prototype.splice = function(idx, rem, str) {
    return this.slice(0, idx) + str + this.slice(idx + Math.abs(rem));
};

let Preview = {
    HTMLElements: [],
    maxLength: 197,
    load(){
        let aux = document.querySelectorAll('.preview.card-text');
        for(const content of aux){
            this.HTMLElements.push(content);
            this.ellipsis(content);
        }
    },
    ellipsis(content){
        let string = content.innerHTML;
        string = string.replace(/<[^>]*>|&[^;]*;/g, '').substr(0, this.maxLength) + '...';
        content.innerHTML = string;
    },
    splitText(content){
        // console.log(content.search('<'));
    },
}, LoadMore = {
    btn: null,
    load(){
        this.btn = document.querySelector('.load-more');
        this.btn.addEventListener('click', function(e){
            e.preventDefault();
            LoadMore.search();
        });
    },
    search(){
        this.setAwait();
        let formData = new FormData();
        formData.append('next', document.querySelectorAll('.noticia').length);
        getData('POST', '/api/noticias', formData);
    },
    setAwait(){
        this.btn.style.display = 'none';
        let loader = document.createElement('div');
        loader.classList.add('loader', 'mx-auto');
        this.btn.parentNode.appendChild(loader);
    },
    finish(data){
        let loader = document.querySelector('.loader');
        loader.parentNode.removeChild(loader);
        if(data.length && data.length == 3){
            this.btn.style.display = 'block';
        }else{
            this.noContent();
        }
        if(data.length){
            this.createCards(data);
        }
    },
    createCards(data){
        for(const noticia of data){
            let card = document.createElement('div');
            card.classList.add('noticia','card','mb-4','col-12','col-md-6','col-lg-3','col-xl-3','mx-lg-1','p-0','border-0');
            document.querySelector('.noticias').appendChild(card);
                let aImg = document.createElement('a');
                aImg.classList.add('card-img-top');
                aImg.href = '/noticia/' + noticia.slug;
                card.appendChild(aImg);
                    let img = document.createElement('img');
                    img.src = document.querySelector('[name=asset]').content + 'storage/' + noticia.imagen;
                    img.alt = noticia.titulo;
                    aImg.appendChild(img);
    
                let body = document.createElement('div');
                body.classList.add('card-body','p-0');
                card.appendChild(body);
                    let date = document.createElement('div');
                    date.classList.add('card-footer','text-muted','mt-3','p-0');
                    date.innerHTML = noticia.fecha;
                    body.appendChild(date);
    
                    let h2 = document.createElement('h2');
                    h2.classList.add('card-title','preview','mt-3');
                    h2.innerHTML = noticia.titulo;
                    body.appendChild(h2);
    
                    let content = document.createElement('div');
                    content.classList.add('card-text','preview','mt-3');
                    content.innerHTML = noticia.contenido;
                    Preview.ellipsis(content)
                    body.appendChild(content);
    
                    let link = document.createElement('a');
                    link.classList.add('btn','btn-more','mt-3');
                    link.href = '/noticia/' + noticia.slug;
                    body.appendChild(link);
                        let icon = document.createElement('i');
                        icon.classList.add('fas','fa-angle-right','pr-2','pb-0');
                        link.appendChild(icon);

                        let span = document.createElement('span');
                        span.innerHTML = 'Leer más';
                        link.appendChild(span);
            
        }
    },
    noContent(){
        let div = document.createElement('div');
        div.classList.add('col-3','mx-auto','text-center');
        this.btn.parentNode.appendChild(div);
            let text = document.createElement('p');
            text.innerHTML = 'No hay más noticias que leer...';
            div.appendChild(text);
    },
};

async function getData(METHOD, URL, BODY){
    return await fetch(URL, {
        method: METHOD,
        body: BODY,
    }).then(respuesta => {
        respuesta.json().then(async json => {
            LoadMore.finish(json.data);
        });
    }).catch(error => {
        console.log(error);
    })
};

document.addEventListener('DOMContentLoaded', function(){
    Preview.load();
    LoadMore.load();
});