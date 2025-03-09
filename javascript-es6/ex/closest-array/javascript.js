const addListeners = obj => {
	obj.addEventListener('click', () => {
		obj.closest('div').style.background = 'red';
	})
}

document.querySelectorAll('button').forEach(addListeners);