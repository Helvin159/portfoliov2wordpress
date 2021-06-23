class redirecter{
    constructor(){
        this.redirectPage()
    }

    redirectPage(){
        if(location.protocol !== 'https:' && location.href !== 'http://127.0.0.1:8080/'){
            location.protocol = 'https:';
        }
    }

}

export default redirecter;