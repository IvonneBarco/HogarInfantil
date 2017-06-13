$(document).ready(function(){
	$('#DivSandona').hide();
	$('#DivEcologia').hide();
	$('#DivGastronomia').hide();
    $('#DivSemanaSanta').hide();
    $('#DivFiestasT').hide();
    $('#DivFiestasP').hide();
    $('#DivCultural').hide();
    $('#DivNiño').hide();
    $('#DivCiclopaseo').hide();
    $('#DivDiciembre').hide();
    $('#DivCarnaval').hide();
    $('#DivFmlia').hide();
    $('#DivEnero').hide();

  
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        }else{
            $('.scrollup').fadeOut();
        }
    });
  
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
    	    return false;
    });
    
    /*===========FUNCIÓN FECHA ============*/
    var fecha = new Date();
    var cad = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate();

    $('#fecreg').val(cad);
    
    /*$( "#datepicker" ).datepicker();
    changeYear: true,
        defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
    });*/

    // Inicio de Sesión
    $(function () {
        $("#sesion").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "clip",
                duration: 1000
            }
        });

        $("#btnSesion").click(function () {
            $("#sesion").dialog("open");
        });
    });

   

    
	$(function() {
    	$('#slides').slidesjs({
	        width: 940,
	        height: 528,
	        play: {
		        active: true,
		        auto: true,
		        interval: 4000,
		        swap: true
        	}
      	});
    });

    $(function() {
	    $( "#datepicker" ).datepicker();
	});



});
