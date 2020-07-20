$(document).ready(function() {
    /*Funcion para enviar datos de formularios con ajax*/
    $('.FormAddAfil').submit(function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var type=$(this).attr('method');
        var url=$(this).attr('action');
        var formType=$(this).attr('data-form');

        if(formType=="add-afil"){
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".AfilForm").html('<img src="assets/img/loading.gif" class="center-all-contens"><span style="color:black;">&nbsp;&nbsp;&nbsp;Espere por favor...</span> ');
					
                },
                error: function() {
                    $(".AfilForm").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".AfilForm").html(data);
                }
            });
            return false;
        }else{
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".ResFormerror").html('Procesando... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
                },
                error: function() {
                    $(".ResFormerror").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".ResFormerror").html(data);
                }
            });
            return false;
        }

        
    });
});
