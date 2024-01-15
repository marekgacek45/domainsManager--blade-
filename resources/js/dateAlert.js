const endDate = document.querySelectorAll(".end_date");

endDate.forEach((el) => {
    const dateText = el.textContent.trim();
    const endDate = new Date(dateText);
    const today = new Date();

    const timeDifference = endDate.getTime() - today.getTime();

    const daysDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

    if (daysDifference <= 14) {
        el.classList.add("bg-red-500");
        el.classList.add("text-white");
    } else if (daysDifference >= 15 && daysDifference <= 31) {
        el.classList.add("bg-orange-400");
        el.classList.add("text-black");
    } else if (daysDifference >= 32 && daysDifference <= 93) {
        {
            el.classList.add("bg-yellow-200");
            el.classList.add("text-black");
        }
    }
});