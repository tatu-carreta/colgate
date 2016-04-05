

jQuery.fn.slideFadeToggle = function (speed, easing, callback) {
    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};



$(function () {
    $('.btnProd').click(function () {
        $('.btnProd').removeClass('active');
        $(this).addClass('active');
        $('.prodContent').load(PATH_HOME+'html/productos/' + $(this).attr('data'), function () {
            $(this).fadeIn('slow');
        });
        
    });
});

$(function () {
    $('#abreBases').click(function () {
        $('#masBases').slideFadeToggle();
        if ($(this).text() == 'LEER MENOS')
        {
            $(this).text('LEER MÁS');
        }
        else
        {
            $(this).text('LEER MENOS');
        }
    });
});

// $(function () {
//     $('.prodImg').hover(function () {
//         $('.globoProd').toggle();
//     });
//     $('.globoProd').hover(function () {
//         $('.globoProd').show();
//     }, function () {
//         $('.globoProd').hide();
//     });
// });


/*
 * FUNCIONES DEL FORMULARIO
 */
function ShowLoading() {
    $("#divLoading").show();
    return true;
    // These 2 lines cancel form submission, so only use if needed.
    //window.event.cancelBubble = true;
    //e.stopPropagation();
}


$(function () {
    var cantProds = 1;
    $('.masEan').click(function () {
        if (cantProds < 10)
        {
            //$('#masProd').append('<input type="text" name="prods[]" class="num ancho60" required="true">');
            $('.masEan').before('<input type="text" name="prods[]" class="num ancho60 ean">');
            cantProds++;
        }
    });
});

function validateEmail(sEmail) {

    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}

$(function () {
    $(".num").bind('keypress', function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if ((!regex.test(key))) {//
            if (($.inArray(event.keyCode, [8, 9, 13, 37, 38, 39, 46])) == -1)
            {
                event.preventDefault();
                return false;
            }
        }
    });
});

$(function () {
    $("#registroForm").submit(function (e) {
        e.preventDefault();

		alert('Formulario cerrado desde las 24:00 horas del 31 de Marzo de 2016');

        return false;
    });
});