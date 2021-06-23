class abstract{
    constructor(){
        this.abstractWork();
    }

    abstractWork(){
        // Variables
        const recentPics = document.querySelectorAll('.recent__col__4');
        let interval = 1000;
        let count = '0';
        const innerW = window.innerWidth;
        



        
            recentPics.forEach(recentPics => {
            recentPics.style.opacity = '0';
        });
         

        window.addEventListener('scroll', ()=>{
            let windowPos = window.scrollY;
            // console.log(windowPos);
            
            if(innerW >= 1200){
                // Dissapear
                if(windowPos <= 1750){
                    setTimeout(()=>{
                        count++;
                        recentPics[0].style.transition = '.5s ease-in'
                        recentPics[0].style.opacity = '0';
                    }, 10)

                    setTimeout(()=>{
                        // console.log(interval);
                        count++;
                        recentPics[1].style.transition = '.5s ease-in'
                        recentPics[1].style.opacity = '0';
                    }, 350)
                        
                    setTimeout(()=>{
                        recentPics[2].style.transition = '.5s ease-in'
                        recentPics[2].style.opacity = '0';
                    }, 700)
                    
                    setTimeout(()=>{
                        recentPics[3].style.transition = '.5s ease-in'
                        recentPics[3].style.opacity = '0';
                    }, 1050)
                    
                    setTimeout(()=>{
                        recentPics[4].style.transition = '.5s ease-in'
                        recentPics[4].style.opacity = '0';
                    }, 1400)
                    
                    setTimeout(()=>{
                        recentPics[5].style.transition = '.5s ease-in'
                        recentPics[5].style.opacity = '0';
                    }, 1750)
                }

                // Appear
                if(windowPos >= 1750){
                    setTimeout(()=>{
                        count++;
                        recentPics[0].style.transition = '.5s ease-in'
                        recentPics[0].style.opacity = '1';
                        if(count > 0){
                            interval = interval + 450;
                        }

                    }, 10)

                    setTimeout(()=>{
                        // console.log(interval);
                        count++;
                        recentPics[1].style.transition = '.5s ease-in'
                        recentPics[1].style.opacity = '1';
                        if(count > 0){
                            interval = interval + 450;
                        }
                    }, 350)
                        
                    setTimeout(()=>{
                        recentPics[2].style.transition = '.5s ease-in'
                        recentPics[2].style.opacity = '1';
                    }, 700)
                    
                    setTimeout(()=>{
                        recentPics[3].style.transition = '.5s ease-in'
                        recentPics[3].style.opacity = '1';
                    }, 1050)
                    
                    setTimeout(()=>{
                        recentPics[4].style.transition = '.5s ease-in'
                        recentPics[4].style.opacity = '1';
                    }, 1400)
                    
                    setTimeout(()=>{
                        recentPics[5].style.transition = '.5s ease-in'
                        recentPics[5].style.opacity = '1';
                    }, 1750)
                }
            }
            

            if(innerW <= 900){
                // Disappear
                if(windowPos <= 1596){
                    setTimeout(()=>{
                        
                        recentPics[0].style.transition = '.5s ease-in'
                        recentPics[0].style.opacity = '0';
                        if(count > 0){
                            interval = interval + 450;
                        }
                    }, 10)

                    setTimeout(()=>{

                        recentPics[1].style.transition = '.5s ease-in'
                        recentPics[1].style.opacity = '0';
                    }, 350)
                }

                if(windowPos <= 1840){
                    setTimeout(()=>{
                        recentPics[2].style.transition = '.5s ease-in'
                        recentPics[2].style.opacity = '0';
                    }, 10)
                    
                    setTimeout(()=>{
                        recentPics[3].style.transition = '.5s ease-in'
                        recentPics[3].style.opacity = '0';
                    }, 350)
                }

                if(windowPos <= 2137){
                    setTimeout(()=>{
                    recentPics[4].style.transition = '.5s ease-in'
                    recentPics[4].style.opacity = '0';
                }, 10)
                
                setTimeout(()=>{
                    recentPics[5].style.transition = '.5s ease-in'
                    recentPics[5].style.opacity = '0';
                }, 350)
                }


                // Appear
                if(windowPos >= 1596){
                    setTimeout(()=>{
                        count++;
                        recentPics[0].style.transition = '.5s ease-in'
                        recentPics[0].style.opacity = '1';
                        if(count > 0){
                            interval = interval + 450;
                        }
                    }, 10)

                    setTimeout(()=>{
                        // console.log(interval);
                        count++;
                        recentPics[1].style.transition = '.5s ease-in'
                        recentPics[1].style.opacity = '1';
                        if(count > 0){
                            interval = interval + 450;
                        }
                    }, 350)
                }

                if(windowPos >= 1840){
                    setTimeout(()=>{
                        recentPics[2].style.transition = '.5s ease-in'
                        recentPics[2].style.opacity = '1';
                    }, 10)
                    
                    setTimeout(()=>{
                        recentPics[3].style.transition = '.5s ease-in'
                        recentPics[3].style.opacity = '1';
                    }, 350)
                }  
                        
                if(windowPos >= 2137){
                    setTimeout(()=>{
                    recentPics[4].style.transition = '.5s ease-in'
                    recentPics[4].style.opacity = '1';
                }, 10)
                
                setTimeout(()=>{
                    recentPics[5].style.transition = '.5s ease-in'
                    recentPics[5].style.opacity = '1';
                }, 350)
                }
                    
                    
                
            }

            if(innerW <= 600){
                if(windowPos >= 1925){
                    setTimeout(()=>{
                        console.log(windowPos, 'current');
                        // console.log('0');
                        recentPics[0].style.transition = '.5s ease-in'
                        recentPics[0].style.opacity = '1';
                    }, 1)
                }
                
                if(windowPos >= 2212){
                    setTimeout(()=>{
                        recentPics[1].style.transition = '.5s ease-in'
                        recentPics[1].style.opacity = '1';
                    }, 1)
                }
                
                if(windowPos >= 2458){
                    setTimeout(()=>{
                        recentPics[2].style.transition = '.5s ease-in'
                        recentPics[2].style.opacity = '1';
                    }, 1)
                }
                
                if(windowPos >= 2743){
                    setTimeout(()=>{
                        recentPics[3].style.transition = '.5s ease-in'
                        recentPics[3].style.opacity = '1';
                    }, 1)
                }
                
                if(windowPos >= 3015){
                    setTimeout(()=>{
                        recentPics[4].style.transition = '.5s ease-in'
                        recentPics[4].style.opacity = '1';
                    }, 1)
                }
                
                if(windowPos >= 3305){
                    setTimeout(()=>{
                        recentPics[5].style.transition = '.5s ease-in'
                        recentPics[5].style.opacity = '1';
                    }, 1)
                }
            }
        })
    }
}

export default abstract;