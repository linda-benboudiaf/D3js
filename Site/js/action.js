
function zoom(x) {
    x.style.height = "120px";
    x.style.width = "120px";
}

function dezoom(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}

$(document).ready(function(){
    $("#cadre").click(function(){
        $("#panel").slideToggle("slow");
    });
});