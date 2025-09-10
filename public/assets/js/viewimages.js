// Fungsi untuk menyimpan gambar ke localStorage
function saveImageToLocalStorage(storageKey, file) {
    const reader = new FileReader();
    reader.onload = function (e) {
        localStorage.setItem(storageKey, e.target.result);
        loadImageFromLocalStorage(storageKey);
    };
    reader.readAsDataURL(file);
}

// Fungsi untuk mengambil gambar dari localStorage
function loadImageFromLocalStorage(storageKey) {
    const imageSrc = localStorage.getItem(storageKey);
    if (imageSrc) {
        const previewId = storageKey === "savedLogo" ? "logo-preview" : "banner-preview";
        const preview = document.getElementById(previewId);
        
        preview.innerHTML = ""; // Bersihkan preview lama

        const img = document.createElement("img");
        img.src = imageSrc;
        img.style.width = "100%";
        img.style.height = "100%";
        img.style.objectFit = "cover";

        if (previewId === "logo-preview") {
            img.style.borderRadius = "50%";
        }

        preview.appendChild(img);
    }
}

// Fungsi untuk menangani upload gambar
function handleImageUpload(inputId, storageKey) {
    const input = document.getElementById(inputId);
    
    input.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            saveImageToLocalStorage(storageKey, file);
        }
    });
}

// Fungsi untuk memicu input file saat preview diklik
function setupUploadTrigger(previewId, inputId) {
    const preview = document.getElementById(previewId);
    const input = document.getElementById(inputId);

    preview.addEventListener("click", function () {
        input.click();
    });
}

// Panggil fungsi saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    loadImageFromLocalStorage("savedLogo");
    loadImageFromLocalStorage("savedBanner");

    handleImageUpload("logo-upload", "savedLogo");
    handleImageUpload("banner-upload", "savedBanner");

    setupUploadTrigger("logo-preview", "logo-upload");
    setupUploadTrigger("banner-preview", "banner-upload");
});
