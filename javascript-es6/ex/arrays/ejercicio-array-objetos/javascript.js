const usuarios = [
	{
		"name" : "Paco",
		"isActive" : false
	},
	{
		"name" : "Laura",
		"isActive" : false
	},
	{
		"name" : "Raquel",
		"isActive" : false
	},
	{
		"name" : "Juan",
		"isActive" : true
	},
	{
		"name" : "Alberto",
		"isActive" : false
	},
	{
		"name" : "Rodolfo",
		"isActive" : true
	},
];

let codigo = '<ul>';
usuarios.forEach(obj => {
	codigo += '<li>'+obj.name+'</li>';
});
codigo+='</ul>';
document.querySelector('.lista').innerHTML = codigo;