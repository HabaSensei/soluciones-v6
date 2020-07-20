/* Without image notification */
  
  $(document).ready(function(){
  setTimeout(function() {
  
            var unique_id = $.gritter.add({
                title: 'Error datos no actualizados',
                text: 'El sitio se actualizara en la brevedad! 2 seg.',
                sticky: false,
                time: '2000',
                class_name: 'gritter-error'
            });

  });
 }, 2000);
