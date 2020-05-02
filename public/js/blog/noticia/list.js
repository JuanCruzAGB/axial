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
};
document.addEventListener('DOMContentLoaded', function(){
    Preview.load();
});