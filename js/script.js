let cancion = null;

// Json de mi sitio
fetch('https://benabarcas.laboratoriodiseno2.cl/wizzu/wp-json/wp/v2/posts?_fields=id,categories,acf&acf_format=standard')

.then(response => response.json())
.then(data => {
    creartarjetas(data.acf, data.id, data.categories);
})
let tarjetas = document.getElementById('dubstep');
function creartarjetas(posts, id, categories) {
    cancion.forEach(posts => {
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

    /* Audio
    const mp3 = document.createElement('audio');
    mp3.classList.add('col-md-12');
    mp3.controls=true;
    mp3.src=posts.acf.audio;
    */

    tarjetaCancion.appendChild(imagenCancion);
    tarjetaCancion.appendChild(tituloCancion);
    tarjetaCancion.appendChild(artistaCancion);
    //tarjeta.appendChild(mp3);
    if (categories == 4)
    tarjetas.appendChild(tarjetaCancion);

})
}