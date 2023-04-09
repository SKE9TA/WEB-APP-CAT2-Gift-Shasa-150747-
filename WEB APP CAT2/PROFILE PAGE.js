const form = document.getElementById('profile-form');
const status = document.getElementById('status');

form.addEventListener('submit', async (e) => {
	e.preventDefault();
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;
	const phone = document.getElementById('phone Number').value;

	await new Promise(resolve => setTimeout(resolve, 2000));
	status.innerHTML = 'Changes saved';
	status.style.display = 'block';
});
