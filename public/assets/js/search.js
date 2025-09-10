// Pastikan kode berjalan setelah DOM termuat
document.addEventListener("DOMContentLoaded", function() {
	const searchButton = document.getElementById("search_button");
	const searchInput = document.getElementById("search_input");

	// Event listener untuk tombol pencarian
	searchButton.addEventListener("click", function() {
		const query = searchInput.value.trim(); // Ambil nilai input
		if (query) {
			alert(`You searched for: ${query}`); // Tampilkan hasil input
			console.log(`Searching for: ${query}`); // Debug di console
		} else {
			alert("Please enter a search term!"); // Validasi jika input kosong
		}
	});
});
