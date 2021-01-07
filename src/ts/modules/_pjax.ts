export class Pjax {
	$window: JQuery<Window>;
	$document: JQuery<Document>;
	$link: JQuery;
	$targetWrap: JQuery;
	link: string;
	target: string;


	constructor(link: string, targetWrap: string, target: string){
		this.$window = $(window);
		this.$document = $(document);
		this.$link = $(link);
		this.$targetWrap = $(targetWrap);
		this.link = link;
		this.target = target;
	}

	init(){
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
			this.onFetch();

			history.pushState(this.pushStateObj(path), title, path);
			setTimeout(() => {
				this.chageContents(path);
			}, 1000);	
		}
	}

	onPopState(e: any){
		this.onFetch();
		setTimeout(() => {
			this.chageContents(this.getTarget(e));
		}, 1000)
	}

	onFetch(){
		$(this.$targetWrap).fadeOut();
	}

	chageContents(path: string){	
		this.$targetWrap.load(path + ' ' + this.target,(response: string) => {
			const nextTitle = response.match(/<title>[\s\S]*?<\/title>/i)[0].replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
			document.title = nextTitle;
			$(this.$targetWrap).fadeIn();
		});
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
}
