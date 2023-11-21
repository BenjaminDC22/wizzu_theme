let cancion = null;

fetch('https://benabarcas.laboratoriodiseno2.cl/wizzu/wp-json/wp/v2/posts?_fields=id,acf&acf_format=standard')

.then(response => response.json())
.then(data => {
    cancion = data.filter(posts => posts.acf.categoria === "song");
    console.log(song);
    creartarjetas();
})
let tarjetas = document.getElementById('tarjetas');
function creartarjetas() {
    cancion.forEach(posts => {
    console.log(posts);
    const tarjeta = document.createElement('div')
    tarjeta.classList.add('col-md-3' , 'canciondatos');
    const imagenTarjeta = document.createElement('img');
    imagenTarjeta.classList.add('img-fluid' , 'col-md-10');
    imagenTarjeta.src = posts.acf.caratula;
    const tituloTarjeta= document.createElement('h5');
    tituloTarjeta.innerHTML = posts.acf.titulo;
    const artistaTarjeta= document.createElement('h6');
    artistaTarjeta.innerHTML=posts.acf.autor;
    const mp3 = document.createElement('audio');
    mp3.classList.add('col-md-12')
    mp3.controls=true;
    mp3.src=posts.acf.archivo;

    tarjeta.appendChild(imagenTarjeta);
    tarjeta.appendChild(tituloTarjeta);
    tarjeta.appendChild(artistaTarjeta);
    tarjeta.appendChild(mp3);

    tarjetas.appendChild(tarjeta);

})
}