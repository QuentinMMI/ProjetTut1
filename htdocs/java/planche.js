(function(){
document.addEventListener("DOMContentLoaded",initialiser);

function initialiser (evt){
    var lesdiv=document.getElementsByClassName("planche");
    for (var unediv of lesdiv){
        unediv.addEventListener("click",changer);
        unediv.addEventListener("mouseenter",animation);
        unediv.addEventListener("mouseleave",animation2);
    }
    $("#planche1").trigger("click");
}

function changer (evt){
    if (this.id == "planche3"){
        this.style.left="7%";
        document.getElementById("planche2").style.left="4%";
    }else if(this.id == "planche2"){
        this.style.left="4%";
        document.getElementById("planche3").style.left="95%";
    }else{
        document.getElementById("planche2").style.left="90%";
        document.getElementById("planche3").style.left="95%";
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
})()