// Button click show event

document.getElementById('button1').addEventListener('click',function(){
    document.querySelector('.section-1').style.display = 'block' ;
    document.querySelector('.section-2').style.display = 'none' ;
})
document.getElementById('button2').addEventListener('click',function(){
    document.querySelector('.section-1').style.display = 'none' ;
    document.querySelector('.section-2').style.display = 'block' ;
})

// Counter
const counters = document.querySelectorAll('.counter');
const speed = 100;

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;
		const inc = target / speed;
		if (count < target) {
			counter.innerText = count + inc;
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});
