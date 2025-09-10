document.querySelector('#login-form').addEventListener('submit', async function(e) {
	e.preventDefault();

	const email = document.querySelector('#email').value;
	const password = document.querySelector('#password').value;

	const response = await fetch('login.php', {
		method: 'POST',
		headers: { 'Content-Type': 'application/json' },
		body: JSON.stringify({ email, password })
	});

	const result = await response.json();
	if (result.status === "success") {
		alert(result.message);
		window.location.href = "dashboard.html"; // Ganti dengan halaman tujuan
	} else {
		alert(result.message);
	}
});
