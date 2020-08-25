const elementoAzul = document.querySelector("#azul");
const elementoRojo = document.querySelector("#rojo");


const azul = {
    nombre: 'Juan Carlos Azul',
    vida: 100,
    fuerza: 10,
    elemento: elementoAzul,
}

const rojo = {
    nombre: 'Juan Carlos Rojo',
    vida: 100,
    fuerza: 10,
    elemento: elementoRojo,
}

const vidaAzul = document.createElement('p');
elementoAzul.appendChild(vidaAzul);
vidaAzul.textContent = azul.vida;

const vidaRojo = document.createElement('p');
elementoRojo.appendChild(vidaRojo);
vidaRojo.textContent = rojo.vida;

azul.elemento.addEventListener('click', pelea);
rojo.elemento.addEventListener('click', pelea);

elementoRojo.style.opacity = 1;
elementoAzul.style.opacity = 1;


function pelea(e) {
    if (e.target === rojo.elemento) {
        vidaAzul.textContent = Number(vidaAzul.textContent) - rojo.fuerza;
        elementoAzul.style.opacity = elementoAzul.style.opacity - 0.1;
    }

    if (e.target === azul.elemento) {
        vidaRojo.textContent = Number(vidaRojo.textContent) - azul.fuerza;
        elementoRojo.style.opacity = elementoRojo.style.opacity - 0.1;

    }
    if (vidaAzul.textContent <= 0) {
        alert(rojo.nombre + ' ' + "HA GANADO!!!!! Recarga la página para volver a jugar")
    }
    if (vidaRojo.textContent <= 0) {
        alert(azul.nombre + ' ' + "HA GANADO!!!!! Recarga la página para volver a jugar")
    }
}

/*
1. Al hacer click sobre un peleador, el otro peleador deberá recibir el golpe (perder vidas)
2. Vamos a evitar el código duplicado, si los dos peleadores hacen algo muuuy similar, podemos crear una funcion que trabaje con ambos
3. Cuando la vida de uno de los luchadores llegue a cero o menos, habrá que avisar quién ganó la pelea (alert, console.log, modal, elemento html)
4. Bajar la opacidad del color de los luchadores, a medida que pierden vida */
