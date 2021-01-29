export class ShowElementOnScroll {
    $el: JQuery;
    $window: JQuery<Window>;
    position: number;
    classname: string;

    constructor(el:string, position:number, classname: string){
        this.$el = $(el);
        this.$window = $(window);
        this.position = position;
        this.classname = classname;
        this.init();
    }

    init(){
        this.$window.on('scroll touchmove', ()=>{
            const scrollTop = this.getScrollTop();
            this.decidePosition(scrollTop, this.classname);
        });
    }

    getScrollTop(){
        return this.$window.scrollTop();
    }

    decidePosition(scrollTop: number, classname: string){
		if( scrollTop > this.position ){
			this.$el.addClass(classname);
		}else{
			this.$el.removeClass(classname);
		}
    }
}