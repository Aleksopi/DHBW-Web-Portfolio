document.addEventListener("DOMContentLoaded", () => {
const thumbElements = document.querySelectorAll(".banner_gallery .thumb");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const closeBtn = document.querySelector(".lightbox-close");
const nextBtn = document.getElementById("next-btn");
const prevBtn = document.getElementById("prev-btn");

const images = <?= json_encode(array_values($car['images'])) ?>;
const carId = "<?= htmlspecialchars($id) ?>";
let currentIndex = 0;

const showImage = (index) => {
    currentIndex = index;
    const imgPath = `assets/cars/${carId}/${images[currentIndex]}`;
    lightboxImg.src = imgPath;
    lightbox.classList.remove("hidden");
};

thumbElements.forEach((thumb, index) => {
    thumb.addEventListener("click", () => showImage(index));
});

closeBtn.addEventListener("click", () => {
    lightbox.classList.add("hidden");
    lightboxImg.src = "";
});

nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
});

prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
});

// Schließen bei Klick außerhalb
lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
    lightbox.classList.add("hidden");
    lightboxImg.src = "";
    }
});

// ESC zum Schließen
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
    lightbox.classList.add("hidden");
    lightboxImg.src = "";
    }
});
});
