document.addEventListener("DOMContentLoaded",initialiser);

function initialiser (evt){
    var lesdiv=document.getElementsByClassName("planche");
    for (var unediv of lesdiv){
        unediv.addEventListener("click",changer);
        unediv.addEventListener("mouseenter",animation);
        unediv.addEventListener("mouseleave",animation2);
    }
}

function changer (evt){
    if (this.id == "planche3"){
        this.style.left="7%";
        document.getElementById("planche2").style.left="4%";
        window.alert("planche3");
    }else if(this.id == "planche2"){
        this.style.left="4%";
        document.getElementById("planche3").style.left="95%";
        window.alert("planche2");
    }else{
        document.getElementById("planche2").style.left="90%";
        document.getElementById("planche3").style.left="95%";
        window.alert("planche1");
    }
}

function animation (evt){
    var left = this.style.left;
    
    left = parseInt(left) - 3 +"%";
    this.style.left = left ; 
}

function animation2 (evt){
    var left = this.style.left;
    
    left = parseInt(left) + 3 +"%";
    this.style.left = left ; 

}
