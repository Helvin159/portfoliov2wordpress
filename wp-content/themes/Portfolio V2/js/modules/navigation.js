class navigation{

    constructor(){
        this.navigationWork()
    }

    navigationWork(){
        // console.log(location.href);

        const navi = document.querySelector('.navigation');
        const sayHiBtn = document.querySelector('.sayHiBtn');
        const innerW = window.innerWidth;
        const headerLogo = document.querySelector('.headerLogo');

        // console.log(innerW)


        if (innerW >= '900'){
            window.addEventListener('scroll', ()=>{
                let windowPos = window.scrollY;
                
                if(windowPos >= '70'){
                    navi.style.right = '0';
                    navi.style.width = "20%";
                    navi.style.height = "5rem";
                    sayHiBtn.style.display = 'none';
                    navi.style.borderBottomLeftRadius = '15rem'; 
                    headerLogo.style.marginLeft = '5rem';

                    headerLogo.style.right = '0';

                }
                
                if(windowPos <= '70'){
                    // navi.style.right = '0';
                    navi.style.width = "100%";
                    navi.style.backgroundColor = '#251351';
                    sayHiBtn.style.display = 'block';
                    navi.style.borderBottomLeftRadius = '0rem'; 
                    navi.style.height = "9rem";
                }
            });
        }
        
    }

}

export default navigation;  