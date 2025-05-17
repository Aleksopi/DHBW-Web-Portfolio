// Scroll-Animation für alle Elemente mit animate-on-scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-in');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.3 });

document.querySelectorAll('.animate-on-scroll').forEach(el => {
  observer.observe(el);
});

// Dynamische Highlight-Slideshow
const slideCars = [
  "audi-rs6",
  "Ferrari-296-GTS",
  "Ferrari-DODICI",
  "Ferrari-LAFerrari-Blu-Ahrabian"
];

let slides = [];
let currentSlide = 0;

// DOM-Elemente holen
const titleEl = document.getElementById("highlight-title");
const sloganEl = document.getElementById("highlight-slogan");
const descEl = document.getElementById("highlight-description");
const imgEl = document.getElementById("highlight-image");
const linkEl = document.getElementById("highlight-link");

// Funktion zur Anzeige eines Slides
function updateSlide(index) {
  const slide = slides[index];
  titleEl.innerHTML = slide.title;
  sloganEl.textContent = slide.slogan || "";
  descEl.textContent = slide.description;
  imgEl.src = slide.image;
  linkEl.href = slide.link;
}

// JSON-Daten laden
async function loadSlides() {
  for (const car of slideCars) {
    try {
      const res = await fetch(`./assets/cars/${car}/data.json`);
      const data = await res.json();

      slides.push({
        title: data.name,
        slogan: data.slogan || "",
        description: data.description,
        image: `./assets/cars/${car}/${data.images[0]}`,
        link: `./details.php?id=${car}`
      });
    } catch (err) {
      console.error(`Fehler beim Laden von ${car}:`, err);
    }
  }

  // Zeige das erste Slide
  if (slides.length > 0) {
    updateSlide(0);
  }
}

// Steuerung: Vorheriger Slide
document.getElementById("prev-slide").addEventListener("click", () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlide(currentSlide);
});

// Steuerung: Nächster Slide
document.getElementById("next-slide").addEventListener("click", () => {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide(currentSlide);
});

// Lade alle Slides beim Start
loadSlides();

// Video-Steuerung auf Startzeit und Loop-Ende begrenzen
const video = document.getElementById('heroVideo');
if (video) {
  video.addEventListener('loadedmetadata', () => {
    video.currentTime = 0;
  });

  video.addEventListener('timeupdate', () => {
    if (video.currentTime > 5) {
      video.currentTime = 0;
    }
  });
}

// Scroll-Animation für die Video-Grid
window.addEventListener('scroll', () => {
  const grid = document.querySelector('.video-grid');
  if (!grid) return;

  const rect = grid.getBoundingClientRect();
  const trigger = window.innerHeight * 0.85;

  if (rect.top < trigger) {
    grid.classList.add('animate-in');
  }
});
