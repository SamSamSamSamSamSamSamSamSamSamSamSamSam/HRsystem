const jobTitleCells = document.querySelectorAll(".job-title");
const criteriaPopup = document.getElementById("resumeScreeningCriteriaPopup");

jobTitleCells.forEach((cell) => {
  cell.addEventListener("mouseover", () => {
    criteriaPopup.style.display = "block";
  });

  cell.addEventListener("mouseout", () => {
    criteriaPopup.style.display = "none";
  });
});

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
