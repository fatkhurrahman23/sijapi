import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    let table = new DataTable("#myTable", {});
    let totalMatkulElement = $("#totalMatkul");

    function updateTotalMatkul() {
        let totalMatkul = table.rows().count();
        totalMatkulElement.text(totalMatkul);
    }

    // Panggil fungsi updateTotalMatkul saat tabel diperbarui
    table.on("draw", function () {
        updateTotalMatkul();
    });

    // Panggil fungsi updateTotalMatkul saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalMatkul();
    });

    // Pertama kali, panggil fungsi updateTotalMatkul
    updateTotalMatkul();

    let totalSKSElement = $("#totalSKS");

    function updateTotalSKS() {
        let totalSKS = table
            .rows()
            .data()
            .toArray()
            .reduce(function (acc, row) {
                return acc + parseInt(row[3]); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }, 0);
        totalSKSElement.text(totalSKS);
    }

    // Panggil fungsi updateTotalSKS saat tabel diperbarui
    table.on("draw", function () {
        updateTotalSKS();
    });

    // Pertama kali, panggil fungsi updateTotalSKS
    updateTotalSKS();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_matkul_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_matkul_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
