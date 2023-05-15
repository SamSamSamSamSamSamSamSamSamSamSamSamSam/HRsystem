// Calendar Rotation
document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    initialDate: "2023-05-01",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    events: [
      {
        title: "John Doe",
        daysOfWeek: [1, 3, 5], // Shifts on Monday, Wednesday, and Friday
        startTime: "09:00", // Shift start time
        endTime: "17:00", // Shift end time
      },
      {
        title: "Jane Smith",
        daysOfWeek: [2, 4], // Shifts on Tuesday and Thursday
        startTime: "13:00", // Shift start time
        endTime: "21:00", // Shift end time
      },
      {
        title: "Michael Johnson",
        startRecur: "2023-05-15", // Start date of recurring shift
        daysOfWeek: [1, 2, 3, 4, 5], // Shifts from Monday to Friday
        startTime: "09:00", // Shift start time
        endTime: "17:00", // Shift end time
      },
      {
        title: "Emily Davis",
        startRecur: "2023-05-12", // Start date of recurring shift
        daysOfWeek: [5], // Shifts on Friday
        startTime: "18:00", // Shift start time
        endTime: "02:00", // Shift end time (next day)
      },
      // Add more complex shift schedules...
    ],
    eventTimeFormat: {
      hour: "numeric",
      minute: "2-digit",
      meridiem: false,
    },
  });
  calendar.render();
});

// Status
const rotaRows = document.querySelectorAll(".rota-row");

const updateStatus = (row, status) => {
  const statusCell = row.querySelector(".status-cell");
  const actionsCell = row.querySelector(".actions-cell");

  statusCell.textContent = status;

  actionsCell.innerHTML = "";

  if (status === "Pending") {
    const approveButton = createButton(
      "Approve",
      "approve-button",
      "bg-green-500",
      "hover:bg-green-600"
    );
    const denyButton = createButton(
      "Reject",
      "deny-button",
      "bg-red-500",
      "hover:bg-red-600"
    );

    actionsCell.appendChild(approveButton);
    actionsCell.appendChild(denyButton);
  } else if (status === "Approved" || status === "Denied") {
  }
};

const createButton = (text, className, bgColorClass, hoverBgColorClass) => {
  const button = document.createElement("button");
  button.textContent = text;
  button.classList.add(
    className,
    "rounded",
    "px-2",
    "py-1",
    "font-semibold",
    "text-white",
    bgColorClass,
    hoverBgColorClass
  );
  return button;
};

rotaRows.forEach((row) => {
  const approveButton = row.querySelector(".approve-button");
  const denyButton = row.querySelector(".deny-button");

  if (approveButton) {
    approveButton.addEventListener("click", () => {
      updateStatus(row, "Approved");
    });
  }

  if (denyButton) {
    denyButton.addEventListener("click", () => {
      updateStatus(row, "Denied");
    });
  }
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
