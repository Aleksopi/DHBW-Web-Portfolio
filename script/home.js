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

// DOM-Elemente für Highlight-Slider
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

// Highlight-Slides laden
async function loadSlides() {
  for (const car of slideCars) {
    try {
      const res = await fetch(`./assets/cars/${car}/data.json`);
      const data = await res.json();

      slides.push({
      title: data.name,
      slogan: data.slogan || "",
      description: data.short_description || data.description,
      image: `./assets/cars/${car}/${data.images[0]}`,
      link: `./details.php?id=${car}`
    });

    } catch (err) {
      console.error(`Fehler beim Laden von ${car}:`, err);
    }
  }

  if (slides.length > 0) {
    updateSlide(0);
  }
}

document.getElementById("prev-slide").addEventListener("click", () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlide(currentSlide);
});

document.getElementById("next-slide").addEventListener("click", () => {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide(currentSlide);
});

loadSlides();

// Video-Steuerung
const video = document.getElementById('heroVideo');
if (video) {
  video.addEventListener('loadedmetadata', () => {
    video.currentTime = 0;
  });

  video.addEventListener('timeupdate', () => {
    if (video.currentTime > 133) {
      video.currentTime = 0;
    }
  });
}

// Scroll-Animation für Video-Grid
window.addEventListener('scroll', () => {
  const grid = document.querySelector('.video-grid');
  if (!grid) return;

  const rect = grid.getBoundingClientRect();
  const trigger = window.innerHeight * 0.85;

  if (rect.top < trigger) {
    grid.classList.add('animate-in');
  }
});

// Dynamische Galerie (aus data.json und erstem Bild)
const carFolders = [
  "audi-rs6",
  "Ferrari-296-GTS",
  "Ferrari-DODICI",
  "Ferrari-LAFerrari-Blu-Ahrabian",
  "ferrari-f40",
  "ferrari-F80"
  // weitere Ordner hier ergänzen
];

const galleryGrid = document.getElementById("gallery-grid");

async function generateGallery() {
  if (!galleryGrid) return;

  for (const folder of carFolders) {
    try {
      const res = await fetch(`./assets/cars/${folder}/data.json`);
      const data = await res.json();

      const imagePath = `./assets/cars/${folder}/${data.images[0]}`;
      const name = data.name || folder;

      const itemHTML = `
        <div class="gallery-item">
          <img src="${imagePath}" alt="${name}">
          <div class="overlay">
            <h3>${name}</h3>
            <a href="./details.php?id=${folder}" class="overlay-btn">Anschauen</a>
          </div>
        </div>
      `;

      galleryGrid.insertAdjacentHTML("beforeend", itemHTML);
    } catch (err) {
      console.error(`Fehler beim Laden der Galerie für ${folder}:`, err);
    }
  }
}

generateGallery();