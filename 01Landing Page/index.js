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
const tab_buttons = document.querySelectorAll(".tab-button");
const navigation = document.querySelector(".nav-links");
const contents = document.querySelectorAll(".links-content");

navigation.addEventListener("mouseover", (e) => {
  const id = e.target.dataset.id;
  console.log(id);
  const element = document.getElementById(id);
  if (id) {
    tab_buttons.forEach((button) => {
      button.classList.remove("active");
      e.target.classList.add("active");
    });
    contents.forEach((content) => {
      content.classList.remove("active");
    });
    element.classList.add("active");
  }
});
