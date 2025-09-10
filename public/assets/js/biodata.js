const slides = document.querySelectorAll(".form-slide");
const nextBtn = document.getElementById("nextBtn");
const popup = document.getElementById("customPopup");
const popupMessage = document.getElementById("popupMessage");

let currentSlide = 0;

nextBtn.addEventListener("click", () => {
  const currentInputs = slides[currentSlide].querySelectorAll("input, textarea");
  const allFilled = Array.from(currentInputs).every(input => {
    if (input.hasAttribute("required")) {
      return input.value.trim() !== "";
    }
    return true;
  });

  if (!allFilled) {
    showPopup("Isi semua data sebelum lanjut!");
    return;
  }

  if (currentSlide < slides.length - 1) {
    slides[currentSlide].classList.remove("active");
    currentSlide++;
    slides[currentSlide].classList.add("active");

    if (currentSlide === slides.length - 1) {
      nextBtn.value = "Kirim";
    }
  } else {
    showPopup("Biodata berhasil dikirim!");
    document.getElementById("biodataForm").reset();
    slides[currentSlide].classList.remove("active");
    currentSlide = 0;
    slides[currentSlide].classList.add("active");
    nextBtn.value = "Lanjut";
  }
});

function showPopup(message) {
  popupMessage.textContent = message;
  popup.classList.add("show");
  setTimeout(() => {
    popup.classList.remove("show");
  }, 3000);
}
