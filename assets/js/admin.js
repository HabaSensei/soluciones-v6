$(document).ready(function() {
	
     //////////////////////////////////////////////////*CAJA AJAX */
     
    /*Envio del formulario con Ajax para añadir aperturas*/
    $('#add-apertura form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-apertura form').serialize();
         var metodo=$('#add-apertura form').attr('method');
         var peticion=$('#add-apertura form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-apertura").html('Agregando Monto <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-add-apertura").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-apertura").html(data);
            }
        });
        return false;
    });
 /*Envio del formulario con Ajax para añadir ingresos*/
    $('#add-ingreso form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-ingreso form').serialize();
         var metodo=$('#add-ingreso form').attr('method');
         var peticion=$('#add-ingreso form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-ingreso").html('Agregando Ingreso <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-add-ingreso").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-ingreso").html(data);
            }
        });
        return false;
    });
   
    /*Envio del formulario con Ajax para añadir Egresos*/
    $('#add-egreso form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-egreso form').serialize();
         var metodo=$('#add-egreso form').attr('method');
         var peticion=$('#add-egreso form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-egreso").html('Agregando Egreso <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-add-egreso").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-egreso").html(data);
            }
        });
        return false;
    });
   
     //////////////////////////////////////////////////*INVENTARIO AJAX */
     
    /*Envio del formulario con Ajax para añadir kit*/
    $('#add-inventario form').submit(function(e) {
         e.preventDefault();
         var metodo=$('#add-inventario form').attr('method');
         var peticion=$('#add-inventario form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $("#res-form-add-inventario").html('Agregando Inventario <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-add-inventario").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-inventario").html(data);
            }
        });
        
        
        
        
        return false;
    });
   
   /*Envio del formulario con Ajax para actualizar kit*/
    $('#update-inventario form').submit(function(e) {
         e.preventDefault();
         
         var metodo=$('#update-inventario form').attr('method');
         var peticion=$('#update-inventario form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $("#res-form-update-inventario").html('Actualizando Inventario <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-update-inventario").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-update-inventario").html(data);
            }
        });
        return false;
    });
   
   /*Envio del formulario con Ajax para añadir categoria*/
    $('#add-categoria form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-categoria form').serialize();
         var metodo=$('#add-categoria form').attr('method');
         var peticion=$('#add-categoria form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-categoria").html('Agregando Categoria <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-add-categoria").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-categoria").html(data);
            }
        });
        return false;
    });
   
    /*Envio del formulario con Ajax para añadir categoria*/
    $('#update-categoria form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#update-categoria form').serialize();
         var metodo=$('#update-categoria form').attr('method');
         var peticion=$('#update-categoria form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-update-categoria").html('Actualizando Categoria <i class="fas fa-spinner fa-spin"></i>');
            },
            error: function() {
                $("#res-form-update-categoria").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-update-categoria").html(data);
            }
        });
        return false;
    });
   
    //////////////////////////////////////////////////*KIT AJAX */
     
    /*Envio del formulario con Ajax para añadir kit*/
    $('#add-kit form').submit(function(e) {
        e.preventDefault();
        var metodo=$('#add-kit form').attr('method');
        var peticion=$('#add-kit form').attr('action');
        $.ajax({
           type: metodo,
           url: peticion,
           data: new FormData(this),
           contentType: false,
           cache: false,
           processData:false,
           beforeSend: function(){
               $("#res-form-add-kit").html('Agregando Kit <i class="fas fa-spinner fa-spin"></i>');
           },
           error: function() {
               $("#res-form-add-kit").html("Ha ocurrido un error en el sistema");
           },
           success: function (data) {
               $("#res-form-add-kit").html(data);
           }
       });
       
       
       
       
       return false;
   });
  
  /*Envio del formulario con Ajax para actualizar kit*/
   $('#update-kit form').submit(function(e) {
        e.preventDefault();
        
        var metodo=$('#update-kit form').attr('method');
        var peticion=$('#update-kit form').attr('action');
        $.ajax({
           type: metodo,
           url: peticion,
           data: new FormData(this),
           contentType: false,
           cache: false,
           processData:false,
           beforeSend: function(){
               $("#res-form-update-kit").html('Actualizando Kit <i class="fas fa-spinner fa-spin"></i>');
           },
           error: function() {
               $("#res-form-update-kit").html("Ha ocurrido un error en el sistema");
           },
           success: function (data) {
               $("#res-form-update-kit").html(data);
           }
       });
       return false;
   });
   
   
   
   
   
});


