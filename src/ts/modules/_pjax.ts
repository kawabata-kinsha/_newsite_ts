export class Pjax {
	$window: JQuery<Window>;
	$document: JQuery<Document>;
	$link: JQuery;
	link: string;
	target: string;
	delaytime: number;


	constructor(link: string, target: string, delaytime: number){
		this.$window = $(window);
		this.$document = $(document);
		this.$link = $(link);
		this.link = link;
		this.target = target;
		this.delaytime = delaytime;
		this.init();
	}

	init(){
		this.$window.on('load', () => {
			this.onLoad();
		});

		this.$document.on('click', this.link, (e)=>{
			this.onClick(e, e.currentTarget);
		});

		this.$window.on('popstate', (e) => {
			this.onPopState(e);
		});
	}

	onClick(e: any, self: string){
		e.preventDefault();

		const path: string = $(self).attr('href');
		const title: string = null;
		if(path === ''){
			console.log(false);
		}else{
			this.beforeFetch();

			history.pushState(this.pushStateObj(path), title, path);
			setTimeout(() => {
				this.ajax(path);
			}, this.delaytime);
		}
	}

	onPopState(e: any){
		this.beforeFetch();
		setTimeout(() => {
			this.ajax(this.getTarget(e));
		}, this.delaytime)
	}

	ajax(path: string){
		// $(this.target).load(path + ' .wrap');
		const request = new XMLHttpRequest();
		request.responseType = 'document';
		request.open('GET', path, true);
		request.onload = () => {
			const nextTitle = request.responseXML.querySelector('title').innerText;
			const bodyClassList = request.responseXML.querySelector('body').classList['value'];
			const nextContents = request.responseXML.querySelector(this.target)
			console.log(bodyClassList);
			document.title = nextTitle;
			document.querySelector(this.target).innerHTML = nextContents.innerHTML;
			document.querySelector('body').setAttribute('class', bodyClassList);

			this.afterFetch();
        }
		request.send();
	}

	getCurrentPath(){
		return location.pathname;
	}

	pushStateObj(path: string){
		const state: { 'path': string} = {'path': path};
		return state;
	}

	getTarget(e: { originalEvent: { state: any; }; }){
		var state = e.originalEvent.state;
		return state.path;
	}

	onLoad(){}

	beforeFetch(){}

	afterFetch(){}

}
