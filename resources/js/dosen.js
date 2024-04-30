import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    var table = $("#myTable").DataTable({
        dom: "Bfrtip",
        buttons: ["pdf"],
    });
    let totalDosenElement = $("#totalDosen");

    function updateTotalDosen() {
        let totalDosen = table.rows().count();
        totalDosenElement.text(totalDosen);
    }

    // Panggil fungsi updateTotalDosen saat tabel diperbarui
    table.on("draw", function () {
        updateTotalDosen();
    });

    // Panggil fungsi updateTotalDosen saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalDosen();
    });

    // Pertama kali, panggil fungsi updateTotalDosen
    updateTotalDosen();

    let totalDosenTIElement = $("#totalDosenTI");

    function updateTotalDosenTI() {
        let totalDosenTI = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[4] === "TI"; // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalDosenTIElement.text(totalDosenTI);
    }

    // Panggil fungsi updateTotalDosenTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalDosenTI();
    });

    // Pertama kali, panggil fungsi updateTotalDosenTI
    updateTotalDosenTI();

    let totalDosenIKElement = $("#totalDosenIK");

    function updateTotalDosenTRK() {
        let totalDosenIK = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[4] === "IK"; // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalDosenIKElement.text(totalDosenIK);
    }

    // Panggil fungsi updateTotalDosenTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalDosenTRK();
    });

    // Pertama kali, panggil fungsi updateTotalDosenTI
    updateTotalDosenTRK();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_dosen_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_dosen_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
