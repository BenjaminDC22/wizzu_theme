let cancion = null;

fetch('https://benabarcas.laboratoriodiseno2.cl/wizzu/wp-json/wp/v2/posts?_fields=id,acf&acf_format=standard')

.then(response => response.json())
.then(data => {
    cancion = data.filter(posts => posts.acf.categoria === "song");
    creartarjetas();
})
let tarjetas = document.getElementById('tarjetas');
function creartarjetas() {
    cancion.forEach(posts => {
    console.log(posts);

    // Tarjeta
    const tarjeta = document.createElement('div');
    tarjeta.classList.add('col-md-3' , 'tarjeta-cancion');

    // Caratula
    const imagenTarjeta = document.createElement('img');
    imagenTarjeta.classList.add('img-fluid' , 'col-md-10');
    imagenTarjeta.src = posts.acf.caratula;

    // Titulo
    const tituloTarjeta= document.createElement('h5');
    tituloTarjeta.innerHTML = posts.acf.titulo;

    // Artista
    const artistaTarjeta= document.createElement('h6');
    artistaTarjeta.innerHTML=posts.acf.artista;

    /* Audio
    const mp3 = document.createElement('audio');
    mp3.classList.add('col-md-12');
    mp3.controls=true;
    mp3.src=posts.acf.audio;
    */

    tarjeta.appendChild(imagenTarjeta);
    tarjeta.appendChild(tituloTarjeta);
    tarjeta.appendChild(artistaTarjeta);
    //tarjeta.appendChild(mp3);

    tarjetas.appendChild(tarjeta);

})
}