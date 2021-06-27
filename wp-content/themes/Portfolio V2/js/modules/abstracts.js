class abstract {
	constructor () {
		this.abstractWork();
	}

	abstractWork () {
		// Variables
		const recentPics = document.querySelectorAll('.skills__thumbs');
		const innerW = window.innerWidth;

		// console.log(recentPics);
		console.log(window.location.pathname);
		// console.log(window.devicePixelRatio, 'DPR');

		if (window.location.pathname == '/') {
			recentPics.forEach((recentPics) => {
				recentPics.style.opacity = '0';
			});

			window.addEventListener('scroll', () => {
				let windowPos = window.scrollY;
				// console.log(windowPos);
				if (innerW <= 414) {
					// Disappear
					if (windowPos <= 2000) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '0';
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '0';
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '0';
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '0';
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '0';
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '0';
						}, 10);
					}

					if (windowPos >= 2472) {
						setTimeout(() => {
							console.log(windowPos, 'current');
							// console.log('0');
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '1';
						}, 0.3);
					}

					if (windowPos >= 2741) {
						setTimeout(() => {
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '1';
						}, 0.3);
					}

					if (windowPos >= 3009) {
						setTimeout(() => {
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '1';
						}, 0.3);
					}

					if (windowPos >= 3280) {
						setTimeout(() => {
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '1';
						}, 0.3);
					}

					if (windowPos >= 3551) {
						setTimeout(() => {
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '1';
						}, 0.3);
					}

					if (windowPos >= 3824) {
						setTimeout(() => {
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '1';
						}, 0.3);
					}
				}

				if (innerW <= 768) {
					// Disappear
					if (windowPos <= 1100) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '0';
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '0';
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '0';
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '0';
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '0';
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '0';
						}, 10);
					}

					// Appear
					if (windowPos >= 1462) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '1';
						}, 10);

						setTimeout(() => {
							// console.log(interval);
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '1';
						}, 350);
					}

					if (windowPos >= 1740) {
						setTimeout(() => {
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '1';
						}, 10);

						setTimeout(() => {
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '1';
						}, 350);
					}

					if (windowPos >= 2017) {
						setTimeout(() => {
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '1';
						}, 10);

						setTimeout(() => {
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '1';
						}, 350);
					}
				}

				if (innerW <= 900) {
					// Disappear
					if (windowPos <= 700) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '0';
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '0';
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '0';
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '0';
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '0';
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '0';
						}, 10);
					}

					// Appear
					if (windowPos >= 1006) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '1';
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '0';
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '0';
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '0';
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '0';
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '0';
						}, 10);
					}
				}

				if (innerW < 1200) {
					// Dissapear
					if (windowPos <= 1300) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '0';
						}, 10);

						setTimeout(() => {
							// console.log(interval);
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '0';
						}, 350);

						setTimeout(() => {
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '0';
						}, 700);

						setTimeout(() => {
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '0';
						}, 1050);

						setTimeout(() => {
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '0';
						}, 1400);

						setTimeout(() => {
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '0';
						}, 1750);
					}

					// Appear
					if (windowPos >= 1522) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '1';
						}, 10);

						setTimeout(() => {
							// console.log(interval);
							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '1';
						}, 350);

						setTimeout(() => {
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '1';
						}, 700);

						setTimeout(() => {
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '1';
						}, 1050);

						setTimeout(() => {
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '1';
						}, 1400);

						setTimeout(() => {
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '1';
						}, 1750);
					}
				}

				if (innerW >= 1200) {
					// Dissapear
					if (windowPos <= 1000) {
						setTimeout(() => {
							recentPics.forEach((recentPics) => {
								recentPics.style.opacity = '0';
							});
							// recentPics[0].style.transition = '.5s ease-in'
							// recentPics[0].style.opacity = '0';
						}, 10);

						// setTimeout(()=>{
						//     // console.log(interval);

						//     recentPics[1].style.transition = '.5s ease-in'
						//     recentPics[1].style.opacity = '0';
						// }, 350)

						// setTimeout(()=>{
						//     recentPics[2].style.transition = '.5s ease-in'
						//     recentPics[2].style.opacity = '0';
						// }, 700)

						// setTimeout(()=>{
						//     recentPics[3].style.transition = '.5s ease-in'
						//     recentPics[3].style.opacity = '0';
						// }, 1050)

						// setTimeout(()=>{
						//     recentPics[4].style.transition = '.5s ease-in'
						//     recentPics[4].style.opacity = '0';
						// }, 1400)

						// setTimeout(()=>{
						//     recentPics[5].style.transition = '.5s ease-in'
						//     recentPics[5].style.opacity = '0';
						// }, 1750)
					}

					// Appear
					if (windowPos >= 1400) {
						setTimeout(() => {
							recentPics[0].style.transition = '.3s ease-in';
							recentPics[0].style.opacity = '1';
						}, 10);

						setTimeout(() => {
							// console.log(interval);

							recentPics[1].style.transition = '.3s ease-in';
							recentPics[1].style.opacity = '1';
						}, 350);

						setTimeout(() => {
							recentPics[2].style.transition = '.3s ease-in';
							recentPics[2].style.opacity = '1';
						}, 700);

						setTimeout(() => {
							recentPics[3].style.transition = '.3s ease-in';
							recentPics[3].style.opacity = '1';
						}, 1050);

						setTimeout(() => {
							recentPics[4].style.transition = '.3s ease-in';
							recentPics[4].style.opacity = '1';
						}, 1400);

						setTimeout(() => {
							recentPics[5].style.transition = '.3s ease-in';
							recentPics[5].style.opacity = '1';
						}, 1750);
					}
				}
			});
		}

		if (innerW < 600) {
			document.querySelector('#message').cols = '45';
			document.querySelector('#message').rows = '10';
		}
		if (innerW > 600) {
			document.querySelector('#message').cols = '68';
			document.querySelector('#message').rows = '5';
		}
	}
}

export default abstract;
