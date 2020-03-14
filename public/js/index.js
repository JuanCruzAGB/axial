function topHeader(){
    if(document.querySelector('header .nav-menu.fixed')){
        let nav = document.querySelector('header .nav-menu.fixed'),
            header = document.querySelector('header');
        setTimeout(() => { header.removeChild(nav); }, 200);
    }
}
function fixedHeader(){
    let navs = document.querySelectorAll('header .nav-menu');
    if(navs.length == 1){
        let nav = document.querySelector('header .nav-menu').cloneNode(true),
            header = document.querySelector('header');
        
        header.appendChild(nav);
        nav.classList.add('fixed');
        setTimeout(() => { nav.style.top = '0'; }, 10);
        document.querySelector('.nav-menu.fixed .sidebar').classList.add('closed');
        document.querySelector('.nav-menu.fixed .sidebar').classList.remove('opened');

        let btnOpener = document.querySelector('.nav-menu.fixed > .sidebar-button');
        btnOpener.addEventListener("click", function(e){
            e.preventDefault();
            Sidebar.open();
        })
    }
}
document.addEventListener('DOMContentLoaded', function(event){
    let scroll = new ScrollDetection({min: 0, max:130}, 'Y', {success: topHeader, error: fixedHeader});
    topHeader();
});