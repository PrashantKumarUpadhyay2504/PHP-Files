const form = document.querySelector('#feedback-form');
const status = document.querySelector('#status');

form.addEventListener('submit', async (event) => {
	event.preventDefault();

	const formData = new FormData(form);
	const response = await fetch(form.action, {
		method: form.method,
		body: formData,
		headers: {
			'Accept': 'application/json'
		}
	});

	try {
		const result = await response.json();
		if (result.status === 'success') {
			status.innerHTML = '<div id="success-msg">Thank you for your feedback!</div>';
			form.reset();
		} else {
			status.innerHTML = '<div id="error-msg">Something went wrong. Please try again later.</div>';
		}
	} catch (error) {
		status.innerHTML = '<div id="error-msg">Something went wrong. Please try again later.</div>';
	}
});
