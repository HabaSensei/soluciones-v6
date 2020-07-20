$(document).ready(function() {
            // update product quantity in cart
            $(".quantity").change(function() {
                var element = this;
                setTimeout(function() { update_quantity.call(element) }, 500);
            });

            function update_quantity() {
                var pcode = $(this).attr("data-code");
                var quantity = $(this).val();
                $(this).parent().parent().fadeOut();
                $.getJSON("manage_cart.php", { "update_quantity": pcode, "quantity": quantity }, function(data) {
                    window.location.reload();
                });
            }
            // add item to cart
            $(".product-form").submit(function(e) {
                        var form_data = $(this).serialize();
                        var button_content = $(this).find('button[type=submit]');
                        button_content.html('Adding...');
                        $.ajax({
                            url: "manage_cart.php",
                            type: "POST",
                            dataType: "json",
                            data: form_data
                        }).done(function(data) {
                            $("#cart-container").html(data.products);
                            button_content.html('Añadido');
                            mySwal = function() {
                                swal(arguments[0]);
                                if (arguments[0].showCloseButton) {
                                    closeButton = document.createElement('button');
                                    closeButton.className = 'swal2-close';
                                    closeButton.onclick = function() { swal.close(); };
                                    closeButton.textContent = 'X';
                                    modal = document.querySelector('.swal-modal');

                                }
                            }
                            mySwal({
                                type: "success",
                                title: "Producto Agregado!",
                                cancelButtonClass: "btn-danger",
                                cancelButtonText: "cancelar",
                                showCancelButton: false,
                                customClass: 'swal-wide',
                                confirmButtonClass: "btn-success-2 col-new boton-swal",
                                confirmButtonText: "Seguir Cotizando",
                                text: '<a href="view_cart.php" class="cancel bo-aju">Ir al Cotizador</a>   <button style="    position: absolute; top: 2px; right: 9px;" class="swal2-close">X</button>',
                                html: true,
                                showCloseButton: true,
                                closeOnConfirm: false
                            })
                        })
                        e.preventDefault();
                    })
                           

                            //Remove items from cart
                            $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
                                e.preventDefault();
                                var pcode = $(this).attr("data-code");
                                $(this).parent().parent().fadeOut();
                                $.getJSON("manage_cart.php", { "remove_code": pcode }, function(data) {
                                    $("#cart-container").html(data.products);
                                    window.location.reload();
                                });
                            });
                        });