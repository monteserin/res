const mute_thing = document.createElement('div');
mute_thing.setAttribute('id', 'mute_thing_id');
mute_thing.setAttribute('style', 'position:absolute; z-index:1000;background:rgba(0,0,0,0.5);right:10px; bottom:10px; color:white; padding:10px');
mute_thing.innerHTML = 'unmute';
document.querySelector('.fullscreen-header').appendChild(mute_thing);

document.querySelector('.fullscreen-header').addEventListener('click', () => {
	const video = document.querySelector('.nectar-video-bg');
	if (video.muted) {
		mute_thing.innerHTML = 'mute'
		video.muted = false;
	} else {
		mute_thing.innerHTML = 'unmute'
		video.muted = true;
	}
});