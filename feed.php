<?php
/*
Template Name: Feed
*/
?>

<?php get_header(); ?>

<!-- INTERFAZ COMPLETA -->
<div class="container seccion-menu">
    <div class="row">
        <div class="col-md-3">
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
                <button class="boton-wizzu w-100 mt-3">
                    <img class="iconos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/microfono.png">
                    <h5 class="mb-0">Artistas</h5>
                </button>
            </div>
        </div>





        <div class="col-md-10">
            <div class="pantalla-wizzu">

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>