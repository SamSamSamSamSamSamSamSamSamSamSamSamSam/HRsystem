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

// Sidebar bars
const plus_btnAdm = document.querySelector(".plusAdm");
const plus_btnAtt = document.querySelector(".plusAtt");
const menu_barAdm = document.querySelector(".drp-dn-menuAdm");
const menu_barAtt = document.querySelector(".drp-dn-menuAtt");

plus_btnAdm.addEventListener("click", () => {
  menu_barAdm.classList.toggle("aktive");
});

plus_btnAtt.addEventListener("click", () => {
  menu_barAtt.classList.toggle("aktive");
});

// Footer display
const footer_sections = document.querySelectorAll(".n-end");

footer_sections.forEach((footer_section) => {
  footer_section.addEventListener("click", () => {
    // Toggle aktibo class for the clicked section
    footer_section.querySelector(".n-info").classList.toggle("aktibo");

    // Hide the other sections
    footer_sections.forEach((section) => {
      if (section !== footer_section) {
        section.querySelector(".n-info").classList.remove("aktibo");
      }
    });
  });
});
