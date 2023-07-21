export class Inview{
    el: NodeListOf<Element>;
    windowHeight: number;
    num: number;
    className: string;

    constructor(el: string, className: string, n: number){
        this.el = document.querySelectorAll(el);
        this.windowHeight = this.getWindowHeight();
        this.num = n;
        this.className = className;
    }

    init(){
        this.el.forEach((element: Element, index: number, array: any) => {
            if (this.getScrollTop() > this.getPosition(element) - this.windowHeight + this.windowHeight/this.num){
                element.classList.add(this.className);
            } else {
                element.classList.remove(this.className);
            }
        });
    }

    getWindowHeight(){
        return window.innerHeight;
    }

    getPosition(el:Element){
        const rect = el.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return rect.top + scrollTop;
    }

    getScrollTop(){
        return document.scrollingElement.scrollTop;
    }
}