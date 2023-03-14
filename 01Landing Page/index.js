// Sidebar
const toggle_button = document.querySelector(".menu");
const close_button = document.querySelector(".close-button");
const sidebar = document.querySelector(".sidebar");

toggle_button.addEventListener("click", () => {
  if (sidebar.classList.contains("show-sidebar")) {
    sidebar.classList.remove("show-sidebar");
    toggle_button.innerHTML = `<i class='bx bx-menu'></i>`;
  } else {
    sidebar.classList.add("show-sidebar");
    toggle_button.innerHTML = `<i class="bx bx-x" style="font-size: 80px;"></i>`;
  }
});

// Navigation Links
const buttons = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".links-content");

buttons.forEach((button) => {
  button.addEventListener("mouseover", () => {
    hideAllContents();
    const id = button.dataset.id;
    if (id) {
      const content = document.getElementById(id);
      if (content) {
        content.classList.add("active");
      }
    }
  });
});

function hideAllContents() {
  contents.forEach((content) => {
    content.classList.remove("active");
  });
}
