import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";

// DataTables initialisation
$(document).ready(function () {
    var table = $("#myTable{{ strtolower($hari) }}").DataTable({
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
                title: "Data Jadwal Kuliah ",
                exportOptions: {
                    columns: [0, 1, 2],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*"];
                },
            },
            {
                extend: "excelHtml5",
                text: "Download Excel",
                title: "Data Mahasiswa",
                exportOptions: {
                    columns: [0, 1, 2],
                },
            },
        ],
    });
    let totalcobajadwalElement = $("#totalcobajadwal");

    function updateTotalcobajadwal() {
        let totalcobajadwal = table.rows().count();
        totalcobajadwalElement.text(totalcobajadwal);
    }

    // Panggil fungsi updateTotalcobajadwal saat tabel diperbarui
    table.on("draw", function () {
        updateTotalcobajadwal();
    });

    // Panggil fungsi updateTotalcobajadwal saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalcobajadwal();
    });

    // Pertama kali, panggil fungsi updateTotalcobajadwal
    updateTotalcobajadwal();

    // Pertama kali, panggil fungsi updateTotalcobajadwalTI
    updateTotalcobajadwalTRK();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_jadwal_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
    }
});

// Tutup modal ketika tombol "Close" diklik
document
    .querySelectorAll('[data-modal-hide="edit_jadwal_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        });
    });
