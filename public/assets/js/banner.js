function handleImageUpload(inputId, previewId, uploadIconId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);
    const uploadIcon = uploadIconId ? document.getElementById(uploadIconId) : null;

    if (!input || !preview) {
        console.error(`Element not found: ${inputId} or ${previewId}`);
        return;
    }

    function handleFileChange(event) {
        event.stopPropagation();
        console.log(`Input file triggered for ${inputId}`);

        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.innerHTML = ''; // Hapus gambar lama

                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.objectFit = 'cover';
                img.style.borderRadius = previewId === 'logo-preview' ? '50%' : '0';

                preview.appendChild(img);

                if (uploadIcon) {
                    uploadIcon.style.display = 'none';
                }

                // Jangan reset input file (hapus input.value = "")!
            };

            reader.readAsDataURL(file);
        } else {
            console.log("Tidak ada file dipilih.");
        }
    }

    function triggerFileInput() {
        input.click();
    }

    preview.addEventListener('click', triggerFileInput);
    input.addEventListener('change', handleFileChange);
}

// Inisialisasi
handleImageUpload('logo-upload', 'logo-preview', 'logo-upload-icon');
handleImageUpload('banner-upload', 'banner-preview', null);
