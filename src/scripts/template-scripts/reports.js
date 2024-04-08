const reportsBtn = document.querySelector(".reports-btn");

function showMoreReports() {
  const reportsList = document.querySelectorAll(
    ".reports-list .report-item:not(.visible-on-mobile)"
  );
  let counter = 0;
  reportsList.forEach((e) => {
    counter < 3 ? e.classList.add("visible-on-mobile") : null;
    counter++;
    if (reportsList.length < 3) {
      reportsBtn.classList.add("hide-report-btn");
    }
  });
}

reportsBtn.addEventListener("click", showMoreReports);
