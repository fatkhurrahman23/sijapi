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

let activePage = "dashboard";

function showActivePage() {
    document.querySelectorAll(".page").forEach((page) => {
        if (page.id !== activePage) {
            page.style.display = "none";
        }
    });

    document.getElementById(activePage).style.display = "block";
}

showActivePage();

document.addEventListener("DOMContentLoaded", function () {
    const navigationItems = document.querySelectorAll(".navigation ul li");
    let activeNavItem = null;

    navigationItems.forEach((item) => {
        item.addEventListener("click", function () {
            // Menghapus kelas 'hovered' dari semua elemen navigasi
            navigationItems.forEach((navItem) => {
                navItem.classList.remove("hovered");
            });

            // Menambahkan kelas 'hovered' hanya pada elemen yang diklik
            this.classList.add("hovered");
            activeNavItem = this;
        });

        item.addEventListener("mouseenter", function () {
            // Hanya menambahkan kelas 'hovered' jika item tidak memiliki kelas 'hovered'
            if (!this.classList.contains("hovered")) {
                this.classList.add("hovered");
            }
        });

        item.addEventListener("mouseleave", function () {
            // Menghapus kelas 'hovered' saat kursor meninggalkan item
            if (this !== activeNavItem) {
                this.classList.remove("hovered");
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const signOutButton = document.getElementById("signOutButton");

    signOutButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default behavior (in this case, following the link)

        // Tampilkan konfirmasi
        if (confirm("Are you sure you want to sign out?")) {
            window.location.href = signOutButton.getAttribute("href");
            // Misalnya, redirect ke halaman sign out atau lakukan proses sign out lainnya
        }
    });
});
