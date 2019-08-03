function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                
            }
        };
        xmlhttp.open("GET", "include/search.php?title=" + str, true);
        xmlhttp.send();
    }
}

$(document).ready(function(){
            
            $("#show").click(function(){
    $(this).hide(function() {
        $("#hide").show(function () {
            $(this).click(function () {
                $("#nav").slideUp();
                $(this).hide(function () {
                    $("#show").show();
                })
            })
        });
        $("#nav").slideDown();
    });
});


    });