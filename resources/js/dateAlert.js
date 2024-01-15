const endDates = document.querySelectorAll(".end_date_value");

endDates.forEach((el) => {
    const td = el.parentElement;
    const tr = td.parentElement;

    const dateText = el.textContent.trim();
    const endDate = new Date(dateText);
    const today = new Date();

    const timeDifference = endDate.getTime() - today.getTime();
    const daysDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

    const tdElement = el.closest(".end_date");
    const daysRemainingSpan = tdElement.querySelector(".days_remaining");

    if (daysDifference <= 14) {
        tdElement.classList.add("alert-1");
        tr.classList.add("alert-1");
        daysDifference === 1
            ? (daysRemainingSpan.innerHTML = `${daysDifference} dzień`)
            : (daysRemainingSpan.innerHTML = `${daysDifference} dni`);
    } else if (daysDifference >= 15 && daysDifference <= 31) {
        tdElement.classList.add("alert-2");
        tr.classList.add("alert-2");
        daysRemainingSpan.innerHTML = `${daysDifference} dni `;
    } else if (daysDifference >= 32 && daysDifference <= 93) {
        tdElement.classList.add("alert-3");
        tr.classList.add("alert-3");
        daysRemainingSpan.innerHTML = `${daysDifference} dni`;
    } else {
        daysRemainingSpan.innerHTML = `${daysDifference} dni`;
    }
});
