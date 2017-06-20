(function(){
    document.addEventListener("DOMContentLoaded",commencer);
    
    function commencer (evt){
        var lesDiv = document.querySelectorAll(".contenuP div");
        for(var uneDiv of lesDiv){  uneDiv.addEventListener("mouseenter",agrandir);
        }
    }
    
    function agrandir (evt){
        this.style.transform = "scale(1.4)";
        this.addEventListener("mouseleave",retrecir);
        this.removeEventListener("mouseenter",agrandir);
    }
    
    function retrecir (evt){
        this.style.transform = "scale(1)";
        this.addEventListener("mouseenter",agrandir);
        this.removeEventListener("mouseleave",retrecir);
    }
})()