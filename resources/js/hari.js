import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    let table = new DataTable("#myTable", {});
    let totalHariElement = $("#totalHari");

    function updateTotalHari() {
        let totalHari = table.rows().count();
        totalHariElement.text(totalHari);
    }

    // Panggil fungsi updateTotalHari saat tabel diperbarui
    table.on("draw", function () {
        updateTotalHari();
    });

    // Panggil fungsi updateTotalHari saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalHari();
    });

    // Pertama kali, panggil fungsi updateTotalHari
    updateTotalHari();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_hari_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_hari_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
