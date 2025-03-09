const obj = document.querySelector('button');

const paint = () => {
	obj.closest('div').style.background = 'red'
}

obj.addEventListener('click', paint);