var popped = 0 ;
$(window).click(()=>{
    if(popped == 0){
        window.open("www.facebook.com", "_blank");
        popped = 1 ;
        setInterval(()=>{
            popped = 0 ;
        },3000)
    }
})