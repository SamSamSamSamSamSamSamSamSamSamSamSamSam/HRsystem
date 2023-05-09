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
