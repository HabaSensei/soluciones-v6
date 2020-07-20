$(document).ready(function() {
    
    /*Funcion para enviar datos de formularios con ajax*/
    $('.FormAdduser').submit(function(e){
        e.preventDefault();
        var data=$(this).serialize();
        var type=$(this).attr('method');
        var url=$(this).attr('action');
        var formType=$(this).attr('data-form');

        if(formType=="add-user"){
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function(){
                    $(".ResForm").html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-info" style="width: 100%">PROCESANDO ...</div></div>');
					
                },
                error: function() {
                    $(".ResForm").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $(".ResForm").html(data);
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
