// Sidebar bars
const plus_btnAdm = document.querySelector(".plusAdm");
const plus_btnAtt = document.querySelector(".plusAtt");
const menu_barAdm = document.querySelector(".drp-dn-menuAdm");
const menu_barAtt = document.querySelector(".drp-dn-menuAtt");

plus_btnAdm.addEventListener("click", () => {
  menu_barAdm.classList.toggle("aktive");
});

plus_btnAtt.addEventListener("click", () => {
  menu_barAtt.classList.toggle("aktive");
});

// Footer display
const footer_sections = document.querySelectorAll(".n-end");

footer_sections.forEach((footer_section) => {
  footer_section.addEventListener("click", () => {
    // Toggle aktibo class for the clicked section
    footer_section.querySelector(".n-info").classList.toggle("aktibo");

    // Hide the other sections
    footer_sections.forEach((section) => {
      if (section !== footer_section) {
        section.querySelector(".n-info").classList.remove("aktibo");
      }
    });
  });
});
