document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-links a");

    // Atur kelas active pada halaman pertama kali dimuat
    const activePage = window.location.pathname.split("/").pop();
    navLinks.forEach((link) => {
        const href = link.getAttribute("href").split("/").pop();
        if (href === activePage) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });

    // Dapatkan elemen ikon toggle
    const menuIcon = document.getElementById("menu-icon");

    // Tambahkan event listener untuk klik pada ikon toggle
    menuIcon.addEventListener("click", function () {
        // Panggil fungsi untuk toggle menu di sini
        toggleMenu();
    });

    // Fungsi untuk toggle menu
    function toggleMenu() {
        const navLinks = document.querySelector(".nav-links");
        navLinks.classList.toggle("active");

        // Atur posisi elemen .nav-links
        if (navLinks.classList.contains("active")) {
            navLinks.style.top = "9%";
        } else {
            navLinks.style.top = "-100%";
        }
    }
});
