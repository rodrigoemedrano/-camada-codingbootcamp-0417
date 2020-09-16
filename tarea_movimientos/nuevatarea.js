// 1) Extraer el total de ingresos
// 2) Extraer el total de egresos (o extracciones)
// 3) Extraer un saldo final (a ver si llegamos a fin de mes)
// TRATAR DE NO COPIARSE DE NINGUN LADO :')

const movimientos = [
  {
    tipo: "ingreso",
    monto: 5000,
  },
  {
    tipo: "ingreso",
    monto: 300,
  },
  {
    tipo: "extraccion",
    monto: 500,
  },
  {
    tipo: "ingreso",
    monto: 300,
  },
  {
    tipo: "extraccion",
    monto: 1000,
  },

  {
    tipo: "ingreso",
    monto: 500,
  },
  {
    tipo: "ingreso",
    monto: 500,
  },
  {
    tipo: "ingreso",
    monto: 500,
  },
  {
    tipo: "extraccion",
    monto: 2000,
  },
  {
    tipo: "ingreso",
    monto: 500,
  },
  {
    tipo: "extraccion",
    monto: 500,
  },
];


function sumarMovimientos(dato) { 
  filtrarMovimientos = movimientos.filter((item) => {
  if (item["tipo"] === dato) {
    return item["monto"]
  
  }}
)
 extraerMontos = filtrarMovimientos.map((item) => item["monto"])
 sumarMontos = extraerMontos.reduce((accu, item) => {return accu + item},0)
}

sumarMovimientos("ingreso")

let totalIngresos = sumarMontos

console.log(`El total de ingresos es ${totalIngresos}`)

sumarMovimientos("extraccion")

let totalExtraccion = sumarMontos

console.log(`El total de extracciones es ${totalExtraccion}`)

let saldo = totalIngresos - totalExtraccion

console.log(`Su balance de cuenta es ${saldo}`)




























