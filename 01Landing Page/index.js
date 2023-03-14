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
const list = document.getElementById("list");
const contents = document.querySelectorAll(".links-content");

list.addEventListener("mouseover", (e) => {
  const id = e.target.dataset.id;
  if (id) {
    contents.forEach((contents) => {
      contents.classList.remove("active");
    });
    const element = document.getElementById(id);
    if (element) {
      element.classList.add("active");
    }
  }
});

list.addEventListener("mouseout", () => {
  contents.forEach((contents) => {
    contents.classList.remove("active");
  });
});
