const escenas = [
{
	"id": 1,
	"titulo": "beso inicial",
},
{
	"id": 2,
	"titulo": "beso final"
}
]

const escena = escenas.find( obj => obj.id == 2)

console.log(escena);