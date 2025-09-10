document.addEventListener("DOMContentLoaded", function() {
    const earningsForm = document.getElementById('earningsForm');
    const submitButton = document.getElementById('submitBtn');
    
    earningsForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form dari submit default

        const earnings = document.getElementById('earnings').value;
        const monthsWorked = document.getElementById('monthsWorked').value;

        // Validasi form
        if (earnings === "" || monthsWorked === "") {
            alert("Please fill in all fields.");
            return;
        }

        // Menyusun data yang akan dikirim
        const formData = new FormData();
        formData.append('earnings', earnings);
        formData.append('months_worked', monthsWorked);

        // Mengirim data menggunakan Fetch API
        fetch("<?= base_url('welcome/insert_earnings') ?>", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === "success") {
                alert("Data added successfully!");
                // Tutup modal setelah submit
                const modal = new bootstrap.Modal(document.getElementById('earningsFormModal'));
                modal.hide(); // Menutup modal
                earningsForm.reset(); // Reset form
            } else {
                alert("An error occurred while adding data.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Error occurred. Please try again.");
        });
    });
});
