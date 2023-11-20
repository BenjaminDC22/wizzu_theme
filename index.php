<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

<!-- BANNER PRINCIPAL -->
<div class="container-fluid banner texto-centrado">
    <div class="row texto-centrado margen-banner">
        <div class="col info-banner">
            <h1 class="m-0">Dejate llevar por la <br> potencia de <br> la música</h1>
            <h3>Disfruta de la música compartida en tiempo real.</h3>
            <button type="button" class="btn btn-light">Escuchar ahora</button>
        </div>
    </div>
</div>

<!-- CALIDAD DE SONIDO -->
<div class="container seccion-margen">
    <h2 class="titulo-calidad mb-5">Un sonido enérgico para cada ocasión</h2>
    <div class="row">
        <!-- Calidad max -->
        <div class="col-md-4">
            <div class="calidad">
                <button class="max-calidad">MAX</button>
                <p class="m-0">(Hasta 24 bit, 192 kHz)</p>
            </div>
            <p>Disfruta de un audio inigualable que reproduce cada detalle con HiRes Free Lossless Audio Code (HiRes FLAC). La experiencia será mucho mejor con una conexión 5G o Wifi con conexión de hardware.</p>
        </div>
        <!-- Calidad alta -->
        <div class="col-md-4">
            <div class="calidad">
                <button class="alta-calidad">ALTA</button>
                <p class="m-0">(Hasta 16 bit, 44,1 kHz)</p>
            </div>
            <p>Disfruta de más de 100 millones de canciones en calidad de estudio con FLAC. Gracias a su formato de código abierto, cada artista puede crear y ofrecer música de alta fidelidad de forma sencilla.</p>
        </div>
        <!-- Calidad baja -->
        <div class="col-md-4">
            <div class="calidad">
                <button class="baja-calidad">BAJA</button>
                <p class="m-0">(Hasta 320 kbps)</p>
            </div>
            <p>Disfruta de la música que te gusta mientras viajas sin preocuparte por los datos. Algo extremadamente útil cuando tienes mala cobertura de datos, se te están acabando o te estás quedando sin espacio para más descargas.</p>
        </div>
    </div>
</div>

<!-- PLANES -->
<section class="seccion-planes">
    <div class="container seccion-padding">
        <div class="texto-planes mb-5">
            <h2 class="mb-2">Elije tu plan Premium</h2>
            <h6>Escucha sin límites en cualquier dispositivo.</h6>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- Plan individual -->
                <div class="tarjeta-plan">
                    <h4>Plan individual</h4>
                    <h6>$4.250 al mes</h6>
                    <p>1 cuenta</p>
                    <hr>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Escucha música sin anuncios</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Reproduce tus canciones en cualquier lugar, incluso sin conexión</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Más de 100 millones de canciones y más de 650 000 vídeos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Plan duo -->
                <div class="tarjeta-plan">
                    <h4>Plan duo</h4>
                    <h6>$5.800 al mes</h6>
                    <p>2 cuentas</p>
                    <hr>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Dos cuentas Premium para parejas que conviven</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Reproducción de música sin anuncios, sin conexión y on-demand</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Reproducción on-demand</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Plan familiar -->
                <div class="tarjeta-plan">
                    <h4>Plan familiar</h4>
                    <h6>$7.450 al mes</h6>
                    <p>6 cuentas</p>
                    <hr>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>6 cuentas Premium para familiares que conviven</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Bloquea la música explícita</p>
                        </div>
                    </div>
                    <div class="detalle-plan">
                        <div class="col-md-1">
                            <img class="palomita" src="<?php echo get_stylesheet_directory_uri(); ?>/img/palomita.png">
                        </div>
                        <div class="col-md-11">
                            <p>Reproducción de música sin anuncios, sin conexión y on-demand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>


<?php get_footer(); ?>