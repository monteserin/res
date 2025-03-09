fetch('https://api.mercadolibre.com/sites/MLA/search?q=malabares')
	.then(res => res.json())
	.then(res => {
		document.querySelector('#lista').innerHTML = res.results.map(product => '<li>' + product.title + '</li>').join('');
	})
