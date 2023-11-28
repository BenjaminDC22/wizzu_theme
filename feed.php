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

                <!-- Lo mas escuchado -->
                <div class="seccion-1">
                    <h3>Escuchado recientemente</h3>
                    <div id="tendencia" class="row">

                    </div>
                </div>
                <div class="seccion-1">
                    <h3>Lo último de BossFight</h3>
                    <div id="dubstep" class="row">

                    </div>
                </div>
                <div class="seccion-1">
                    <h3>Lanzamientos de esta semana</h3>
                    <div id="exito" class="row">

                    </div>
                </div>
                <div class="seccion-1">
                    <h3>Solo éxitos</h3>
                    <div id="volver" class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let cancion = null;

    // Json de mi sitio
    fetch('https://benabarcas.laboratoriodiseno2.cl/wizzu/wp-json/wp/v2/posts?_fields=id,categories,acf&acf_format=standard&per_page=100')

    .then(response => response.json())
    .then(data => {
        data.map(post => {creartarjetas(post)})
    })
    let tarjetas = document.getElementById('dubstep');
    let tendencia = document.getElementById('tendencia');
    let exito = document.getElementById('exito');
    let volver = document.getElementById('volver');
    function creartarjetas(posts) {
        console.log(posts);

        // Tarjeta
        const tarjetaCancion = document.createElement('div');
        tarjetaCancion.classList.add('col-md-3' , 'tarjeta-cancion');

        // Caratula
        const imagenCancion = document.createElement('img');
        imagenCancion.classList.add('img-fluid' , 'caratulas');
        imagenCancion.src = posts.acf.caratula;

        // Titulo
        const tituloCancion= document.createElement('h5');
        tituloCancion.classList.add('titulo-cancion');
        tituloCancion.innerHTML = posts.acf.titulo;

        // Artista
        const artistaCancion= document.createElement('h6');
        artistaCancion.classList.add('artista-cancion');
        artistaCancion.innerHTML=posts.acf.artista;

        //Audio
        const mp3 = document.createElement('audio');
        mp3.classList.add('col-md-12');
        mp3.controls=true;
        mp3.src=posts.acf.audio;

        tarjetaCancion.appendChild(imagenCancion);
        tarjetaCancion.appendChild(tituloCancion);
        tarjetaCancion.appendChild(artistaCancion);
        tarjetaCancion.appendChild(mp3);
        if (posts.categories[0] == 3){
            tarjetas.appendChild(tarjetaCancion);
        }
        if (posts.categories[0] == 4){
            tendencia.appendChild(tarjetaCancion);
        }
        if (posts.categories[0] == 5){
            exito.appendChild(tarjetaCancion);
        }
        if (posts.categories[0] == 2){
            volver.appendChild(tarjetaCancion);
        }
        console.log(posts.categories[0])
    }
</script>

<?php get_footer(); ?>