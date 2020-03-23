class SmoothScroll{
    /**
     * Creates an instance of SmoothScroll.
     * @param {HTMLElement[]} btns - All the buttons to animate his actions.
     * @memberof SmoothScroll
     */
    constructor(btns){
        this.addEvent(btns);
    }
    /**
     * Add the event to the btns.
     * @param {HTMLElement[]} btns - All the buttons to animate his actions.
     * @memberof SmoothScroll
     */
    addEvent(btns){
        for(const btn of btns){
            btn.addEventListener('click', function(e){
                if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname){
                    let target = $(this.hash);
                    if(target.length){
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        }
    }
}