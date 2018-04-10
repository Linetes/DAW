function getRequestObject() {
    // Asynchronous objec created, handles browser DOM differences

    if(window.XMLHttpRequest) {
        // Mozilla, Opera, Safari, Chrome IE 7+
        return (new XMLHttpRequest());
    }
    else if (window.ActiveXObject) {
        // IE 6-
        return (new ActiveXObject("Microsoft.XMLHTTP"));
    } else {
        // Non AJAX browsers
        return(null);
    }
}

function sendRequest(){
    $.get("ajax.php", { pattern: document.getElementById('userInput').value })
        .done(function( data ) {
            var ajaxResponse = document.getElementById('ajaxResponse');
            ajaxResponse.innerHTML = data;
            ajaxResponse.style.visibility = "visible";
        });
}

function selectValue() {
    
    $.get("ajax.php", { id: document.getElementById('id').value })
        .done(function( data ) {
        var tabla=document.getElementById('datos');
        tabla.innerHTML = data;
    });
}

$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

