const seresVivos = {
"humanos":[
{
	"name" : "Paco",
	"edad": 18
},
{
	"name" : "Laura",
	"edad": 21
},
{
	"name" : "Rodolfo",
	"edad":7
}
]
,
"tortugas":[
{
	"name" : "Rafael",
	"edad": 19
},
{
	"name" : "Donatello",
	"edad": 16
},
{
	"name" : "Leonardo",
	"edad": 17
}
]
};


const seleccion = [
{
	"name": "humanos",
	"selected": false
},
{
	"name": "tortugas",
	"selected": true
}
];


const result = seleccion.reduce((todosLosAnimales, raza) => {
		if(raza.selected){
			const animal = seresVivos[raza.name].filter(animal => animal.edad>18);
			return [...todosLosAnimales, animal];
		}else{
			return [...todosLosAnimales];
		}
	}, []
	)

console.log(result)
