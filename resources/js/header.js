const navLinks = document.querySelector(".nav-links");
function onToggleMenu(e) {
    e.name = e.name === "menu" ? "close" : "menu";
    navLinks.classList.toggle("top-[9%]");
}

function loadContent(url, targetId) {
    fetch(url)
        .then((response) => response.text())
        .then((html) => {
            document.getElementById(targetId).innerHTML = html;
        })
        .catch((error) => {
            console.error("Error loading content:", error);
        });
}
