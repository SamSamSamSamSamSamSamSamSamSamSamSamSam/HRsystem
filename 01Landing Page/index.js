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
