import axios from '../../node_modules/axios';

// Create new message
class newMessage {
	constructor () {
		axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce;
		this.events();
	}

	events () {
		const form = document.querySelector('#contactForm');
		// const testimonialForm = document.querySelector('#testimonialForm');
		// const newReviewBtn = document.querySelector('#newTestimonialBtn');
		// const exitBtn = document.querySelector('#closeTestOverlayBtn');
		// let overlayOn = false;

		if (form) {
			form.addEventListener('submit', this.messageDispatcher);
		}

		// console.log('hmmm:   ', overlayOn)
		// console.log(testimonialForm)
	}

	// methods
	async messageDispatcher (e) {
		// Prevent Default Form Behaviour
		e.preventDefault();

		// Variables
		const fName = document.querySelector('#fname');
		const lName = document.querySelector('#lName');
		const email = document.querySelector('#eMail');
		const organization = document.querySelector('#organization');
		// const date = document.querySelector('[name="date"]');
		// const time = document.querySelector('[name="time"]');
		const message = document.querySelector('#message');
		const submitBtn = document.querySelector('[name="submit]');
		const plug = (axios.defaults.headers.common['X-WP-Nonce'] = portfolioData.nonce);

		// Prevent submit on empty form

		if (fName.value != '' && email.value != '' && message.value != '' && date.value != null) {
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
				// console.log('response:', response)
				if (response.status === 200) {
					setTimeout(() => {
						document.querySelector('.overlay').classList.add('d-none');
						// document.querySelector('.thankyouMessage').classList.remove('d-none');
					}, 300);
				}
			} catch (e) {
				// document.querySelector('#sec8ErrorMsg').classList.remove('d-none');
				// document.querySelector('#sec8ErrorMsg').style.animation = 'opacityChange 0.4s ease-in';
				fName.value = '';
				date.value = '';
				message.value = '';
				time.value = '';
				email.value = '';
			}
		}
	}
}

export default newMessage;
