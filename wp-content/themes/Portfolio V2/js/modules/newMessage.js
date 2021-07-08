import axios from 'axios';

// Create new message
class newMessage {
	constructor () {
		axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce;
		// axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce;
		this.events();
	}

	events () {
		const form = document.querySelector('#contactForm');

		// let overlayOn = false;

		if (form) {
			form.addEventListener('submit', this.messageDispatcher);
		}
	}

	// methods
	async messageDispatcher (e) {
		// Prevent Default Form Behaviour
		e.preventDefault();
		console.log('button');

		// Variables
		const fName = document.querySelector('#fname');
		const lName = document.querySelector('#lName');
		const email = document.querySelector('#eMail');
		const organization = document.querySelector('#organization');
		const message = document.querySelector('#message');
		const submitBtn = document.querySelector('#submit');
		const plug = (axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce);

		console.log(submitBtn);

		// Prevent submit on empty form
		if (fName.value != '' && email.value != '' && message.value != '') {
			var newMessage = {
				// message: {
				title   : fName.value + ' ' + lName.value,
				org     : organization.value,
				email   : email.value,
				comment : message.value,
				status  : 'private',
				// }
			};

			// console.log(newMessage);

			try {
				const response = await axios.post(
					portfolioData.root_url + '/wp-json/mrrymer/v1/new-message',
					newMessage
				);
				console.log('response:', response);
				if (response.status === 200) {
					setTimeout(() => {
						document.querySelector('.overlay').style.display = 'none';
						// document.querySelector('.thankyouMessage').classList.remove('d-none');
					}, 300);
				}
			} catch (e) {
				document.querySelector('.overlay').classList.remove('d-none');
				// document.querySelector('.overlay').style.animation = 'opacityChange 0.4s ease-in';
				fName.value = '';
				lName.value = '';
				organization.value = '';
				// date.value = '';
				message.value = '';
				// time.value = '';
				email.value = '';
			}
		}
	}
}

export default newMessage;
