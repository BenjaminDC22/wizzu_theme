<?php
/*
Template Name: Canción
*/
?>

<?php get_header(); ?>

<!-- INTERFAZ DE CANCIÓNES -->
<div class="main">
    <div class="container mx-auto">

            <div class="seccion-1">
                <div id="exito" class="col">

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
        tarjetaCancion.classList.add('row' , 'tarjeta-cancion');

        // Caratula
        const imagenCancion = document.createElement('img');
        imagenCancion.classList.add('img-fluid', 'col-md-2');
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
        mp3.classList.add('col-md-2');
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