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
            <button type="button" class="btn btn-light">Iniciar sesión</button>
        </div>
    </div>
</div>

<!-- CALIDAD DE SONIDO -->
<div class="container seccion-margen">
    <h2 class="mb-5">Un sonido enérgico para cada ocasión</h2>
    <div class="row">
        <!-- CALIDAD MAX -->
        <div class="col-md-4">
            <div class="calidad">
                <h4>Max</h4>
                <p>(Hasta 24 bit, 192 kHz)</p>
            </div>
            <p>Disfruta de un audio inigualable que reproduce cada detalle con HiRes Free Lossless Audio Code (HiRes FLAC). La experiencia será mucho mejor con una conexión 5G o Wifi con conexión de hardware.</p>
        </div>

        <!-- CALIDAD ALTA -->
        <div class="col-md-4">
            <div class="calidad">
                <h4>ALTA</h4>
                <p>(Hasta 16 bit, 44,1 kHz)</p>
            </div>
            <p>Disfruta de más de 100 millones de canciones en calidad de estudio con FLAC. Gracias a su formato de código abierto, cada artista puede crear y ofrecer música de alta fidelidad de forma sencilla.</p>
        </div>

        <!-- CALIDAD BAJA -->
        <div class="col-md-4">
            <div class="calidad">
                <h4>BAJA</h4>
                <p>(Hasta 320 kbps)</p>
            </div>
            <p>Disfruta de la música que te gusta mientras viajas sin preocuparte por los datos. Algo extremadamente útil cuando tienes mala cobertura de datos, se te están acabando o te estás quedando sin espacio para más descargas.</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>