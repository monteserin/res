let step = 0;
const sliderWidth = 512;
const slider = document.querySelector('.slider');
const moveSlider = () => {
	step = step > -2 ? step - 1 : 0;
	console.log(step)
	slider.style.marginLeft = sliderWidth * step + 'px';
}

document.querySelector('.btn').addEventListener('click', moveSlider);