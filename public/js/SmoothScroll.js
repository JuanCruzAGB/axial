class SmoothScroll{
    /**
     * Creates an instance of SmoothScroll.
     * @param {HTMLElement[]} btns - All the buttons to animate his actions.
     * @param {integer} pixels - The top pixels to add.
     * @memberof SmoothScroll
     */
    constructor(btns, pixels){
        this.addEvent(btns, pixels);
    }
    /**
     * Add the event to the btns.
     * @param {HTMLElement[]} btns - All the buttons to animate his actions.
     * @param {integer} pixels - The top pixels to add.
     * @memberof SmoothScroll
     */
    addEvent(btns, pixels){
        for(const btn of btns){
            btn.addEventListener('click', function(e){
                if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname){
                    let target = $(this.hash);
                    if(target.length){
                        $('html, body').animate({
                            scrollTop: target.offset().top - pixels
                        }, 1000);
                        return false;
                    }
                }
            });
        }
    }
    /**
     * Scroll the page to an element.
     * @static
     * @param {HTMLElement} element - The element to scroll.
     * @param {int} pixels - The top pixels to add.
     * @memberof SmoothScroll
     */
    static scrollTo(element, pixels){
        let target = $(element);
        $('html, body').animate({
            scrollTop: target.offset().top - pixels
        }, 1000);
    }
}