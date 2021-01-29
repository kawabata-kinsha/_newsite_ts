export class Inview{
    $el: JQuery;
    $window: JQuery<Window>;
    windowHeight: number;
    num: number;
    className: string;

    constructor(el: string, className: string, n: number){
        this.$el = $(el)
        this.$window = $(window);
        this.windowHeight = this.getWindowHeight();
        this.num = n;
        this.className = className;
    }

    init(){
        this.$el.each((index, el) => {
            if (this.getScrollTop() > this.getPosition(el) - this.windowHeight + this.windowHeight/this.num){
                $(el).addClass(this.className);
            } else {
                $(el).removeClass(this.className);
            }    
        });
    }

    getWindowHeight(){
        return this.$window.height();
    }

    getPosition(self){
        return $(self).offset().top;
    }

    getScrollTop(){
        return this.$window.scrollTop();
    }
}