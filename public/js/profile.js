const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .prev-btn");
const form = document.querySelector("form");

nextBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        changeActiveState("next");
    });
});
prevBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        changeActiveState("prev");
    });
});

function changeActiveState(btn) {
    let index = 0;
    const active = document.querySelector(".active");
    index = steps.indexOf(active);
    steps[index].classList.remove("active");
    if (btn === "next") {
        index++;
    } else if (btn === "prev") {
        index--;
    }
    steps[index].classList.add("active");
}
