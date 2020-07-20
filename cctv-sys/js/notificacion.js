/* Without image notification */
  
  $(document).ready(function(){
  setTimeout(function() {
  
            var unique_id = $.gritter.add({
                title: 'Datos Actualizados Exitosamente',
                text: 'El sitio se actualizara en la brevedad! 2 seg.',
                sticky: false,
                time: '2000',
                class_name: 'gritter-custom'
            });

  });
 }, 2000);



