export class PageScroll {
    
    $el: JQuery;
    el: string;
    duration: number;
    easing: string;
    num: number;

    constructor(el:string ,duration:number, num:number, easing:string = 'swing'){
        this.$el = $(el);
        this.duration = duration;
        this.easing = easing;
        this.num = num;
        this.event();
    }

    event(){
        this.$el.on('click', (e) => {
            e.preventDefault();
            const hash = $(e.currentTarget).attr('href');
            this.animation(hash);
        });
    }

    animation(hash: string){
        $('html,body').animate({ scrollTop: $(hash).offset().top - this.num}, this.duration, this.easing);
    }
}