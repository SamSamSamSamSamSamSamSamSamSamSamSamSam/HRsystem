// Sidebar
const sidebar = document.querySelector(".sidebar");
const toggleButton = document.querySelector(".menu");
const closeButton = document.querySelector(".close-button");

const toggleSidebar = () => {
  sidebar.classList.toggle("show-sidebar");
  toggleButton.innerHTML = sidebar.classList.contains("show-sidebar")
    ? `<i class="bx bx-x" style="font-size: 80px;"></i>`
    : `<i class="bx bx-menu"></i>`;
};

toggleButton.addEventListener("click", toggleSidebar);
closeButton.addEventListener("click", toggleSidebar);

// Navigation Content
const contents = document.querySelectorAll(".content");

const showContent = (id) => {
  const content = document.getElementById(id);
  content && content.classList.add("active");
};

const hideContent = (content) => {
  content.classList.remove("active");
};

const hideAllContents = () => {
  contents.forEach(hideContent);
};

const handleButtonHover = (event) => {
  hideAllContents();
  const id = event.target.dataset.id;
  id && showContent(id);
};

const buttons = document.querySelectorAll(".tab-button");
buttons.forEach((button) => {
  button.addEventListener("mouseover", handleButtonHover);
});

// Form
const validateForm = () => {
  // Get the values of the form fields
  const planName = document.getElementById("plan_name").value;
  const coverageLevel = document.getElementById("coverage_level").value;
  const deductible = document.getElementById("deductible").value;
  const premium = document.getElementById("premium").value;

  // Check if the fields are empty
  if (
    planName === "" ||
    coverageLevel === "" ||
    deductible === "" ||
    premium === ""
  ) {
    alert("Please fill out all fields before submitting.");
    return false;
  }

  // Check if the coverage level and deductible are numbers
  if (isNaN(coverageLevel) || isNaN(deductible)) {
    alert("The coverage level and deductible must be numbers.");
    return false;
  }

  // Check if the premium is a positive number
  if (isNaN(premium) || premium <= 0) {
    alert("The premium must be a positive number.");
    return false;
  }

  return true;
};

// Attach the validateForm function to the form's submit event
const form = document.getElementById("plan_setup_form");
form.addEventListener("submit", (event) => {
  if (!validateForm()) {
    event.preventDefault();
  }
});
