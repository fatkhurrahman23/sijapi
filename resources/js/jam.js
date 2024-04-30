import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    let table = new DataTable("#myTable", {});
    let totalJamElement = $("#totalJam");

    function updateTotalJam() {
        let totalJam = table.rows().count();
        totalJamElement.text(totalJam);
    }

    // Panggil fungsi updateTotalJam saat tabel diperbarui
    table.on("draw", function () {
        updateTotalJam();
    });

    // Panggil fungsi updateTotalJam saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalJam();
    });

    // Pertama kali, panggil fungsi updateTotalJam
    updateTotalJam();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_jam_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_jam_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });

flatpickr(".aturjam", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
});
