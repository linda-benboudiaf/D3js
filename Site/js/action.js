
function zoom(x) {
    x.style.height = "120px";
    x.style.width = "120px";
}

function dezoom(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}

// fonction qui permet de faire un slide dans la page d'acceuil ... 
$(document).ready(function(){
    $("#cadre").click(function(){
        $("#panel").slideToggle("slow");
    });
});