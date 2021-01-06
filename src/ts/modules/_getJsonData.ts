export class GetJsonData {

    requestUrl: string;
    request: any;

    constructor(requestUrl: string){
        this.requestUrl = requestUrl;
        this.request;
    }

    init(){
        this.set();
        let isLoaded = false;
        this.request.onload = () => {
            isLoaded = true;
        }
        this.send();
        if(isLoaded){
            return this.parse();
        }else{
            alert('JSONの取得に失敗しました');
        }
    }

    set(){
        this.request = new XMLHttpRequest();
        this.request.open('GET', this.requestUrl, false);
    }

    send(){
        this.request.send();
    }

    parse(){
        return JSON.parse(this.request.response);
    }
}
