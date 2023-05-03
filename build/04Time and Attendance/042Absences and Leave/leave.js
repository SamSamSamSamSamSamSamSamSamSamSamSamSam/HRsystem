// // Sidebar
// const sidebar = document.querySelector(".sidebar");
// const toggleButton = document.querySelector(".menu");
// const closeButton = document.querySelector(".close-button");

// const toggleSidebar = () => {
//   sidebar.classList.toggle("show-sidebar");
//   toggleButton.innerHTML = sidebar.classList.contains("show-sidebar")
//     ? `<i class="bx bx-x" style="font-size: 80px;"></i>`
//     : `<i class="bx bx-menu"></i>`;
// };

// toggleButton.addEventListener("click", toggleSidebar);
// closeButton.addEventListener("click", toggleSidebar);

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

// Leave
const leaveRows = document.querySelectorAll(".leave-row");

const updateLeaveDate = (row) => {
  const statusCell = row.querySelector(".leave-status");
  const dateCell = row.querySelector(".leave-date");

  // Set current date if leave request is pending
  if (statusCell.classList.contains("status-pending")) {
    dateCell.textContent = new Date().toLocaleDateString();
  }

  // Set date if leave request has been approved or denied
  if (
    statusCell.classList.contains("status-approved") ||
    statusCell.classList.contains("status-denied")
  ) {
    dateCell.textContent = new Date().toLocaleDateString();
  }
};

const handleLeaveApproval = (row, status) => {
  const statusCell = row.querySelector(".leave-status");
  const actionsCell = row.querySelector(".leave-actions");

  statusCell.classList.remove("status-pending");
  statusCell.classList.add(`status-${status}`);
  statusCell.textContent = status.charAt(0).toUpperCase() + status.slice(1);
  actionsCell.innerHTML = "";

  updateLeaveDate(row);
};

leaveRows.forEach((row) => {
  const approveButton = row.querySelector(".approve-button");
  const denyButton = row.querySelector(".deny-button");

  // Add event listener to each Approve button
  if (approveButton) {
    approveButton.addEventListener("click", () => {
      handleLeaveApproval(row, "approved");
    });
  }

  // Add event listener to each Deny button
  if (denyButton) {
    denyButton.addEventListener("click", () => {
      handleLeaveApproval(row, "denied");
    });
  }

  updateLeaveDate(row);
});
