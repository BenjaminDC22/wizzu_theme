<?php
/*
Template Name: Feed
*/
?>

<?php get_header(); ?>

<!-- INTERFAZ -->
<div class="container seccion-menu">
    <div class="row">

        <!-- Lado izquierdo -->
        <div class="col-md-3">
            <!-- Menú principal -->
            <div class="menu-wizzu mb-3">
                <button class="boton-wizzu w-100">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.png">
                    <h5 class="mb-0">Buscar</h5>
                </button>
                <button class="boton-wizzu w-100 my-3">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home.png">
                    <h5 class="mb-0">Inicio</h5>
                </button>
                <button class="boton-wizzu w-100">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/radio.png">
                    <h5 class="mb-0">Radio</h5>
                </button>
            </div>
            <!-- Menú de biblioteca -->
            <div class="menu-wizzu">
                <h3 class="mb-3">Tu biblioteca</h3>
                <button class="boton-wizzu w-100">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/reloj.png">
                    <h5 class="mb-0">Recientes</h5>
                </button>
                <button class="boton-wizzu w-100 my-3">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/biblioteca.png">
                    <h5 class="mb-0">Playlists</h5>
                </button>
                <button class="boton-wizzu w-100">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/melodia.png">
                    <h5 class="mb-0">Canciones</h5>
                </button>
                <button class="boton-wizzu w-100 my-3">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/microfono.png">
                    <h5 class="mb-0">Artistas</h5>
                </button>
                <button class="boton-wizzu w-100 mt-3">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/usuario.png">
                    <h5 class="mb-0">Para ti</h5>
                </button>
            </div>
        </div>

        <!-- Lado derecho -->
        <div class="col-md-9">
            <div class="pantalla-wizzu">
                <img class="w-100 banner-martin" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-martin.jpg">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>