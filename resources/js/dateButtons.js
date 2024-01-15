document.addEventListener("DOMContentLoaded", function () {
    const startDateInput = document.querySelector("#start_date");
    const endDateInput = document.querySelector("#end_date");
    const addOneButton = document.querySelector("#add-one");
    const addTwoButton = document.querySelector("#add-two");
    const addOneButtonEdit = document.querySelector("#add-one-edit");
    const addTwoButtonEdit = document.querySelector("#add-two-edit");

    const extendDomain = (year, date) => {
        const startDateValue = new Date(date.value);

        startDateValue.setFullYear(startDateValue.getFullYear() + year);

        const formattedDate = startDateValue.toISOString().split("T")[0];

        endDateInput.value = formattedDate;
    };
    if (addOneButton && addTwoButton) {
        addOneButton.addEventListener("click", () =>
            extendDomain(1, startDateInput)
        );
        addTwoButton.addEventListener("click", () =>
            extendDomain(2, startDateInput)
        );
    }
    if (addOneButtonEdit && addTwoButtonEdit) {
        addOneButtonEdit.addEventListener("click", () =>
            extendDomain(1, endDateInput)
        );
        addTwoButtonEdit.addEventListener("click", () =>
            extendDomain(2, endDateInput)
        );
    }
});
