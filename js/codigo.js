/*

//tabla con for

let t = 6;
let h = 11;

for( let c = 1; c < h; c ++) {
    let r = t*c
    console.log(c, "x", t, "=", r  )
}

// tabla con while

let t = 6;
let h = 11;
let c = 1;

while (c < h) {
    let r = t*c
    console.log(c, "x", t, "=", r  )
    c++
}

//meses con for

const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

for(let m=0; m<meses.length; m++) {
    console.log ( meses[m])
}

// meses con while 

const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

let m = 0;

while (m<meses.length) {
    console.log (meses[m])
    m++
}

// funciones

let a = 5
let b = 8
let c = 12
let d = 15

 function Sumar(numero1, numero2) {
     ResultadoSuma = numero1 + numero2
     console.log (numero1, "+", numero2, "=", ResultadoSuma)
 }

 Sumar (a, b)
 Sumar (b, c)
 Sumar (c, d)
 Sumar (a, d)



// otra funcion

 let alumno01 = { 
     nombre: "ana",
     apellido: "perez",
     dni: "34564714"
 }

 let alumno02 = { 
    nombre: "gonzalo",
    apellido: "lechman",
    dni: "41058729"
}

function ObtenerDatosAlumnos (dato1, dato2) {
    console.log (dato1.apellido, dato2.apellido)
    
}

ObtenerDatosAlumnos (alumno01, alumno02)



 const number1 = document.querySelector('#number1');
 const number2 = document.querySelector('#number2');
 const igual = document.querySelector('#igual');
 const mas = document.querySelector('#mas');
 const resultado = document.querySelector('#resultado');

number1.addEventListener('click', BotonUno)
number2.addEventListener('click', BotonDos)

function Botones() {
    
}
 */

/*
const imagen = document.createElement('img');

imagen.src = "assets/imagen.jpg";

imagen.id = "img";

// elemento.classList.add("clase")
// elemento.classList.remove("clase")

// imagen.classList.toggle('deshabilitado')
// imagen.classList.toggle('deshabilitado')
// imagen.classList.toggle('deshabilitado')

// imagen.addEventListener("click", pepito)


// contenedor.appendChild(imagen);
    



function pepito(e) {
    e.target.classList.toggle('deshabilitado')
}

*/
/////
const contenedor = document.querySelector('#contenedor');

const parrafos = document.querySelectorAll('p');

const cantidad = parrafos.length;

for (let i = 0; i < cantidad; i++ ) {
    parrafos[i].addEventListener('click', callbackParrafos)
}

function callbackParrafos(e) {
    console.log(e)
    e.target.classList.toggle('deshabilitado')
}













