import "./bootstrap";

function loadEditMatkul() {
    fetch("/admin/edit_matkul")
        .then((response) => response.text())
        .then((html) => {
            document.getElementById("edit_matkul").innerHTML = html;
        });
}
