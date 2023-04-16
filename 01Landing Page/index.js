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
