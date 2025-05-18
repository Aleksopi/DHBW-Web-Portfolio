// ./script/about.js Arthur

document.addEventListener('DOMContentLoaded', function() {
  // Fade-In für den Begrüßungstext (falls noch verwendet)
  const welcomeTextElements = document.querySelectorAll('.fade-in-text');
  if (welcomeTextElements.length > 0) {
    welcomeTextElements.forEach(el => {
      // Die Animation wird durch CSS gesteuert, JS wird hier nicht unbedingt benötigt,
      // es sei denn, man möchte den Start verzögern oder auf ein Event binden.
      // Fürs Erste lassen wir es bei der CSS-Animation.
    });
  }

  // Logik für den interaktiven Team-Abschnitt
  const teamIcons = document.querySelectorAll('.team-member-icon');
  const memberDetailsContainer = document.querySelector('.team-member-details-container');
  const allDetailTexts = document.querySelectorAll('.team-member-text');
  const closeButtons = document.querySelectorAll('.close-details-btn');

  if (teamIcons.length > 0 && memberDetailsContainer && allDetailTexts.length > 0) {
    teamIcons.forEach(icon => {
      icon.addEventListener('click', function() {
        const memberId = this.dataset.member; // Holt den Wert von data-member="personX"
        const targetDetail = document.getElementById(memberId);

        // Alle Icons de-aktivieren
        teamIcons.forEach(i => i.classList.remove('active'));
        // Aktuelles Icon aktivieren
        this.classList.add('active');

        // Alle Detailtexte ausblenden
        allDetailTexts.forEach(text => {
          text.classList.remove('active');
          // text.style.display = 'none'; // Alternative, wenn keine Animation gewünscht
        });

        // Ziel-Detailtext einblenden
        if (targetDetail) {
          targetDetail.classList.add('active');
          // targetDetail.style.display = 'block'; // Alternative
        }
      });
    });

    // Event Listener für die Schließen-Buttons in den Detailansichten
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Das Elternelement des Buttons ist der .team-member-text Div
            this.parentElement.classList.remove('active');
            // this.parentElement.style.display = 'none'; // Alternative

            // Optional: Auch das zugehörige Icon de-aktivieren
            const activeIcon = document.querySelector('.team-member-icon.active');
            if (activeIcon) {
                activeIcon.classList.remove('active');
            }
        });
    });

  } else {
    if (teamIcons.length === 0) console.log('Keine Team-Icons gefunden.');
    if (!memberDetailsContainer) console.log('Team-Detail-Container nicht gefunden.');
    if (allDetailTexts.length === 0) console.log('Keine Team-Detailtexte gefunden.');
  }

});
