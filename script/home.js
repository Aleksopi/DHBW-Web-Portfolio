const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-in');
        observer.unobserve(entry.target); // Nur einmal animieren
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
  });