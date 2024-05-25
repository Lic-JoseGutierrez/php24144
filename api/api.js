// API de GAMER POWER (API de juegos y obsequios gratuitos) https://www.gamerpower.com/
async function fetchData() {
    const url = 'https://gamerpower.p.rapidapi.com/api/filter?platform=pc.steam.ps4.xbox-one.android';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '768b962f27msh466f04a9b5dedd1p133441jsnfc4147e9f1bb',
        }
    };

    try {
        const response = await fetch(url, options);
        const data = await response.json();

        if (data && data.length > 0) {
            const containerJuegos = document.getElementById('container-juegos');
            data.forEach(juego => {
                const titulo = juego.title;
                const imagen = juego.thumbnail;

                // Crear contenedor de tarjeta
                const cardElemento = document.createElement('div');
                cardElemento.classList.add('card');

                // Crear elemento de título
                const tituloElemento = document.createElement('h3');
                tituloElemento.textContent = titulo;

                // Crear elemento de imagen
                const imagenElemento = document.createElement('img');
                imagenElemento.src = imagen;
                imagenElemento.alt = titulo;

                // Agregar título e imagen al contenedor de tarjeta
                cardElemento.appendChild(imagenElemento);
                cardElemento.appendChild(tituloElemento);

                // Agregar la tarjeta al contenedor principal
                containerJuegos.appendChild(cardElemento);
            });
        } else {
            console.log("No se encontraron datos");
        }
    } catch (error) {
        console.error(error);
    }
}
fetchData();

// API de RAWG (API listado de juegos) https://rawg.io/
// async function fetchData() {
//     const url = 'https://api.rawg.io/api/games';
//     const key = '71e294e04a3347b19aadd894d456e330';

//     try {
//         const response = await fetch(url + `?key=${key}`);
//         const data = await response.json();

//         if (data && data.results && data.results.length > 0) {
//             const containerJuegos = document.getElementById('container-juegos');

//             data.results.forEach(juego => {
//                 const titulo = juego.name;
//                 const imagen = juego.background_image;

//                 // Crear contenedor de tarjeta
//                 const cardElemento = document.createElement('div');
//                 cardElemento.classList.add('card');

//                 // Crear elemento de título
//                 const tituloElemento = document.createElement('h3');
//                 tituloElemento.textContent = titulo;

//                 // Crear elemento de imagen
//                 const imagenElemento = document.createElement('img');
//                 imagenElemento.src = imagen;
//                 imagenElemento.alt = titulo;

//                 // Agregar título e imagen al contenedor de tarjeta
//                 cardElemento.appendChild(imagenElemento);
//                 cardElemento.appendChild(tituloElemento);

//                 // Agregar la tarjeta al contenedor principal
//                 containerJuegos.appendChild(cardElemento);
//             });
//         } else {
//             console.log("No se encontraron datos");
//         }
//     } catch (error) {
//         console.error(error);
//     }
// }
// fetchData();