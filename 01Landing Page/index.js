const toggle_button = document.querySelector(".sidebar-toggle");
const navigation = document.querySelector(".nav-links");

toggle_button.addEventListener("click", () => {
  navigation.classList.toggle("show-links");
});
