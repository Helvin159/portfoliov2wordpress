class sayHiBtn {
	constructor () {
		this.sayHiBtn();
	}

	sayHiBtn () {
		const btn = document.querySelectorAll('.sayHiButton');
		const overlay = document.querySelector('.overlay');
		const body = document.querySelector('body');
		const exitBtn = document.querySelector('.exitOverlay');

		// window.body.addEventListener('scroll', () => {
		// 	let scrollPos = window.scrollY;
		// 	console.log(scrollPos);
		// });

		// btn.forEach((btn) =>
		// 	addEventListener('click', () => {
		// 		overlay.style.display = 'block';
		// 		body.style.overflowY = 'hidden';
		// 		body.style.overflowX = 'hidden';
		// 	})
		// );

		// console.log(btn);

		btn[1].addEventListener('click', () => {
			overlay.style.display = 'block';
			body.style.overflowY = 'hidden';
			body.style.overflowX = 'hidden';
		});
		btn[0].addEventListener('click', () => {
			overlay.style.display = 'block';
			body.style.overflowY = 'hidden';
			body.style.overflowX = 'hidden';
		});

		exitBtn.addEventListener('click', () => {
			overlay.style.display = 'none';
			body.style.overflowY = '';
			body.style.overflowX = '';
		});
		// console.log(exitBtn);
	}
}

export default sayHiBtn;
