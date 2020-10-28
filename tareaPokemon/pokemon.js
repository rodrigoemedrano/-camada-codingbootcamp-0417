const imagenContainer = document.getElementById("imagen");



const traerPokemon = async () => {
    try {
      const fetchPokemon = await fetch("https://pokeapi.co/api/v2/pokemon/?limit=20");
      const pokemonDefinitivo = await fetchPokemon.json();
       
      pokemonDefinitivo.results.map( async function(valor) {
        const urlDefinitiva = await fetch(valor.url);
        const jsonUrl = await urlDefinitiva.json();
        const nombre = jsonUrl.name
        const id = jsonUrl.id
        pintarPokemon(nombre, id)

      }) 


    } catch (error) {
      console.log(error);
    }
    
  };

traerPokemon()

const pintarPokemon = (nombre, id) => {
    const codigoHTML = `<p class="parrafito">${nombre}</p> <img class="imagen" src="https://pokeres.bastionbot.org/images/pokemon/${id}.png"> `;
    imagenContainer.innerHTML += codigoHTML;

  };



  

