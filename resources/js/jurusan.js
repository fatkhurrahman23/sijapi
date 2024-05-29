import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    var table = $("#myTable").DataTable({
        layout: {
            topStart: {
                buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
            },
        },
        dom: "Bfrtip",
        buttons: [
            {
                extend: "pdfHtml5",
                text: "Download PDF",
                title: "Data Jurusan",
                exportOptions: {
                    columns: [0, 1, 2, 3],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*"];
                },
            },
        ],
    });
    let totalJurusanElement = $("#totalJurusan");

    function updateTotalJurusan() {
        let totalJurusan = table.rows().count();
        totalJurusanElement.text(totalJurusan);
    }

    // Panggil fungsi updateTotalJam saat tabel diperbarui
    table.on("draw", function () {
        updateTotalJam();
    });

    // Panggil fungsi updateTotalJam saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalJurusan();
    });

    // Pertama kali, panggil fungsi updateTotalJam
    updateTotalJurusan();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_jurusan_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_jurusan_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
