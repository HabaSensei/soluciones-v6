<!--
Author: SOLUCIONES
Empresa: SOLUCIONES CCTV Y SISTEMAS
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
error_reporting(E_PARSE);
session_start();
include 'library/configServer.php';
include 'library/consulSQL.php';
include 'library/config.php';
include_once("library/config.inc.php");


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <?php include 'inc/links.php'; ?>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>



    </nav>
    </div>
    <style>
    /*form styles*/
    #msform {
        width: width: 100%;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    #msform input,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }

    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }

    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 25%;
        float: left;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #27AE60;
        color: white;
    }

    /* primer slide */

    @media (max-width: 1366px) {

        .cart-checkout {
            padding-right: 43px !important;
            padding-left: 40px !important;
            margin-right: 104px !important;
            display: table-cell;
        }
    }

    .cart-checkout {
        padding-right: 43px !important;
        padding-left: 40px !important;
        margin-right: 104px !important;
        display: table-cell;
    }

    span,
    applet,
    object,
    iframe,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .cart-bottom {
        background: #fff;
        padding: 2em 2em;
    }

    .table {
        border-bottom: 1px solid #ccc;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    tr.main-heading th {
        background: #ccc;
        padding: 1em 4.72em;
        font-size: 0.9em;
    }

    tr.cake-top {
        border-bottom: 1px solid #ccc;
        position: relative;
    }

    td.cakes {
        padding: 1em 0em !important;
    }

    td {
        vertical-align: middle;
    }

    td.quantity {
        vertical-align: middle;
    }

    td.quantity {
        text-align: center;
    }

    td.price {
        padding: 0em 1em;
    }

    td.top-remove {
        position: relative;
    }

    .vocher {
        padding: 1.1em 0em 0em 0em;
    }

    .img-inside {
        width: 134px;
    }

    .close-btm {
        position: absolute;
        top: 66%;
        right: 28%;
    }

    .close-btm h5 {
        font-size: 0.75em;
        color: #fff;
        cursor: pointer;
        background: #0c517d;
        padding: 0.5em 1em;
        border-radius: 3px;
    }

    .dis-card {
        float: left;
        width: 50%;
    }

    .dis-total {
        float: right;
        width: 50%;
        text-align: right;
    }

    .dis-total h1 {
        font-size: 1.1em;
        color: #000;
        padding: 0.8em 2em;
        margin: 0.7em auto;
        background: #ccc;
        display: inline-block;
        text-align: right;
    }

    .tot-btn {
        margin-top: 1.3em;
    }

    .clear {
        clear: both;
    }

    .tot-btn a.shop {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #3f3f3f;
        border-radius: 3px;
    }

    .tot-btn a.check {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #0b507c;
        border-radius: 3px;
    }

    /* fin del primer slide */
    </style>

    <main>
        <div class="container margin_60_35" style="    height: 140vh;" id="view_cart">

            <!-- multistep form -->
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" style="color:black!important;">Account Setup</li>
                    <li style="color:black!important;">Social Profiles</li>
                    <li style="color:black!important;">Personal Details</li>
                    <li style="color:black!important;">Final</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <div class="cart-bottom">
                        <div class="table">
                            <table>
                                <tbody>
                                    <tr class="main-heading">
                                        <th>Images</th>
                                        <th class="long-txt">Product Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr class="cake-top">
                                        <td class="cakes">
                                            <div class="product-img">
                                                <img class="img-inside"
                                                    src="assets/img-products/case-gambyte-navi-600w-negro-1-panel-de-vidrio-led-rgb.jpg">
                                            </div>
                                        </td>
                                        <td class="cake-text" align="left">
                                            <div class="product-text">
                                                <h3>CASE CON FUENTE 600W</h3>
                                                <p>Modelo: NAVI GTA80818A</p>
                                                <p>Marca: GAMBYTE</p>
                                                <p>Codigo: P000001</p>
                                            </div>
                                        </td>
                                        <td class="quantity">
                                            <div class="product-right">
                                                <input min="1" type="number" id="quantity" name="quantity" value="1"
                                                    class="form-control input-small">
                                            </div>
                                        </td>
                                        <td class="price">
                                            <h4>$12.99</h4>
                                        </td>
                                        <td class="top-remove">
                                            <h4>$25.98</h4>
                                            <div class="close-btm">
                                                <h5>Remove</h5>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="cake-bottom">
                                        <td class="cakes">
                                            <div class="product-img2">
                                                <img class="img-inside"
                                                    src="assets/img-products/case-gambyte-navi-600w-negro-1-panel-de-vidrio-led-rgb.jpg">
                                            </div>
                                        </td>
                                        <td class="cake-text" align="left">
                                            <div class="product-text">
                                                <h3>CASE CON FUENTE 600W</h3>
                                                <p>Modelo: NAVI GTA80818A</p>
                                                <p>Marca: GAMBYTE</p>
                                                <p>Codigo: P000001</p>
                                            </div>
                                        </td>
                                        <td class="quantity">
                                            <div class="product-right">
                                                <input min="1" type="number" id="quantity" name="quantity" value="1"
                                                    class="form-control input-small">
                                            </div>
                                        </td>
                                        <td>
                                            <h4>$12.99</h4>
                                        </td>
                                        <td class="top-remove">
                                            <h4>$25.98</h4>
                                            <div class="close-btm">
                                                <h5>Remove</h5>
                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="vocher">

                            <div class="dis-total">
                                <h1>Total $38.97</h1>

                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2>¿Que Desea Realizar?</h2>
                    <br><br>
                    <div class="payment-method" align="center">
                        <label for="comprar" class="method cart-checkout">
                             
                        <img style="width: 200px;" src="assets\img\comprar2.svg" />
                            <div class="radio-input">
                                <input id="comprar" type="radio" name="opciones" 
                                    onclick="javascript:yesnoCheck();">
                                Comprar Productos
                            </div>
                        </label>

                        <label for="cotizar" class="method cart-checkout">
                            <img  style="width: 200px;" src="assets\img\cotizar2.svg" />
                            <div class="radio-input">
                                <input id="cotizar" type="radio" name="opciones" 
                                    onclick="javascript:yesnoCheck();">
                                Cotizar Productos
                            </div>
                        </label>
                         
                    </div>
                    <br><br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset >
                <div id="ifYes" style="display:none">
                <h2 class="fs-title">Compras</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <input type="text" name="fname" placeholder="First Name" />
                    <input type="text" name="lname" placeholder="Last Name" />
                    <input type="text" name="phone" placeholder="Phone" />
                    <textarea name="address" placeholder="Address"></textarea>
                
                
                </div>
                <div id="ifNo" style="display:none">
                <h2 class="fs-title">Cotizar</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <input type="text" name="fname" placeholder="First Name" />
                    <input type="text" name="lname" placeholder="Last Name" />
                    <input type="text" name="phone" placeholder="Phone" />
                    <textarea name="address" placeholder="Address"></textarea>
                
                
                </div>
                    
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
                 
            </form>



            




    </main><!-- End main -->

    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     
    <script>
     function yesnoCheck() {
        if (document.getElementById('comprar').checked) {
            
            document.getElementById('ifYes').style.display = 'block';
            document.getElementById('ifNo').style.display = 'none';
        } else {
            document.getElementById('ifYes').style.display = 'none';
               document.getElementById('ifNo').style.display = 'block';

        }
    }
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function() {
        return false;
    })
    </script>