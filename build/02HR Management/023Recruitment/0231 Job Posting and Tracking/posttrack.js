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
