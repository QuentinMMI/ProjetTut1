(function(){
    document.addEventListener("DOMContentLoaded",commencer);
    
    function commencer (evt){
        var leBtn = document.getElementById("vote");
        leBtn.addEventListener("click",voter);
    }
    
    function splitString(stringToSplit, separator) {
        var arrayOfStrings = stringToSplit.split(separator);
        return arrayOfStrings;
    }
    
    function voter (evt){
        var adresse = window.location.search;
        var separator = "?id=";
        adresse = splitString(adresse,separator);
        var separator = "&type=";
        adresse = splitString(adresse[1],separator);
        var idE = adresse[0];
        var typeE = adresse[1];
        $.ajax("php/AJAX-php/voter.php",{method:"POST",data:{Id:idE,Type:typeE},success:confirmerVoter})
    }
    
    function confirmerVoter (infoPhp){
        if(infoPhp!="Oeuvre"){
            window.alert("Vous avez voté pour '"+infoPhp+"', votre vote à été pris en compte. RAPPEL (Vous pouvez voter en tout pour une photo, un son et une vidéo !)");   
        }else{
            window.alert("Vous ne pouvez pas voter pour votre propre Oeuvre ...");
        }
        
    }
})()