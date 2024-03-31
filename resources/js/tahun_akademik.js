const modalToggle = document.querySelector("[data-modal-toggle]");
const modal = document.getElementById("edit_tahun_akademik_modal");
const overlay = document.createElement("div");
overlay.classList.add("overlay");

modalToggle.addEventListener("click", () => {
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
    document.body.appendChild(overlay);
    overlay.style.display = "block";
});

const modalClose = document.querySelector("[data-modal-hide]");

modalClose.addEventListener("click", () => {
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
    overlay.style.display = "none";
    document.body.removeChild(overlay);
});
