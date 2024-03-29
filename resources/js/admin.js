// add hovered class to selected list item

let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

document.addEventListener("DOMContentLoaded", function () {
    const navigationItems = document.querySelectorAll(".navigation ul li");

    navigationItems.forEach((item) => {
        item.addEventListener("click", function (event) {
            // Hide all pages
            document.querySelectorAll(".main .page").forEach((page) => {
                page.style.display = "none";
            });

            // Get target id from clicked navigation item
            const targetId = this.id.replace("-nav", "");

            // Show the target page
            document.getElementById(targetId).style.display = "block";
        });
    });
});

function showScroll() {
    document.getElementById("myNav").style.overflowY = "scroll"; // Menampilkan scroll bar
}

function hideScroll() {
    document.getElementById("myNav").style.overflowY = "hidden"; // Menyembunyikan scroll bar kembali
}
