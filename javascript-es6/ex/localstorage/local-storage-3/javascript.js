      document.querySelectorAll('img').forEach(obj => {
      	obj.addEventListener('click', (e) => {
      		localStorage.setItem('imagenSeleccionada', obj.getAttribute("src"));
      		location.href= 'pagina2.html';
      	});  
      });