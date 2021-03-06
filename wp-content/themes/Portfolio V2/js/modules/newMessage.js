import axios from 'axios';

// Create new message
class newMessage {
	constructor () {
		axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce;
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
		// console.log('button');

		// Variables
		const fName = document.querySelector('#fName');
		const lName = document.querySelector('#lName');
		const email = document.querySelector('#eMail');
		const organization = document.querySelector('#organization');
		const message = document.querySelector('#message');
		const submitBtn = document.querySelector('#submit');
		const plug = (axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce);

		// console.log(submitBtn);
		// console.log(fName, 'fName');
		// console.log(lName, 'lName');
		// console.log(email, 'email');
		// console.log(organization, 'org');
		// console.log(message, 'msg');

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
				// console.log('response:', response);
				if (response.status === 200) {
					setTimeout(() => {
						document.querySelector('.overlay').style.display = 'none';
						document.querySelector('body').style.overflowY = '';
						document.querySelector('body').style.overflowX = '';
					}, 300);
				}
			} catch (e) {
				document.querySelector('.overlay').classList.remove('d-none');

				fName.value = '';
				lName.value = '';
				organization.value = '';
				message.value = '';
				email.value = '';
			}
		}
	}
}

export default newMessage;
