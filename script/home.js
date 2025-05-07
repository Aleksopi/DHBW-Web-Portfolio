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

const slides = [
  {
    title: "Ferrari F40:<br>Eine Motorsport-Ikone.",
    description: "Der Ferrari F40 ist bekannt für seine rohe Leistung und ikonische Form.",
    image: "./assets/img/picture/738D596E-744E-495D-A19B-791236156C0F_1_105_c.jpeg"
  },
  {
    title: "Ferrari F40:<br>Eine Motorsport-Ikone.",
    description: "Der Ferrari F40 ist bekannt für seine rohe Leistung und ikonische Form.",
    image: "./assets/img/picture/7EADC893-9E88-43A8-A091-306E9C3C639E_1_105_c.jpeg"
  },
  {
    title: "Ferrari F40:<br>Noch einen",
    description: "Auch ein Auto",
    image: "./assets/img/picture/6EC25E8D-CD8C-4B5C-8A46-72E7BDA1825B_1_105_c.jpeg"
  },
  {
    title: "Und noch ein Ferrari F40:<br>Und noch ein",
    description: "Auto macht brum brum",
    image: "./assets/img/picture/F349224B-F562-489B-B149-988FF6143689_1_105_c.jpeg"
  }
];

let currentSlide = 0;

const titleEl = document.getElementById("highlight-title");
const descEl = document.getElementById("highlight-description");
const imgEl = document.getElementById("highlight-image");

function updateSlide(index) {
  const slide = slides[index];
  titleEl.innerHTML = slide.title;
  descEl.textContent = slide.description;
  imgEl.src = slide.image;
}

document.getElementById("prev-slide").addEventListener("click", () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  updateSlide(currentSlide);
});

document.getElementById("next-slide").addEventListener("click", () => {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide(currentSlide);
});

const video = document.getElementById('heroVideo');

video.addEventListener('loadedmetadata', () => {
  // Starte bei Sekunde 5
  video.currentTime = 0;
});

video.addEventListener('timeupdate', () => {
  // Stoppe bei Sekunde 15 (wenn kein loop)
  if (video.currentTime > 5) {
    video.currentTime = 0; // Zurückspulen oder video.pause();
  }
});

  window.addEventListener('scroll', () => {
  const grid = document.querySelector('.video-grid');
  const rect = grid.getBoundingClientRect();
  const trigger = window.innerHeight * 0.85;

  if (rect.top < trigger) {
    grid.classList.add('animate-in');
  }
});