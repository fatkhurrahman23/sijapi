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

document.addEventListener("DOMContentLoaded", () => {
    document
        .querySelectorAll('[data-modal-toggle="edit_jadwal_modal"]')
        .forEach((button) => {
            button.addEventListener("click", (event) => {
                const modalId = button.getAttribute("data-modal-target");
                const modal = document.getElementById(modalId);
                modal.classList.remove("hidden");
                document.body.classList.add("overflow-hidden");

                // Optionally, fill modal with data based on the clicked button
                // You can add more data attributes to the button and retrieve them here
                const jadwalId = button.getAttribute("data-jadwal-id");
                fillModalWithData(jadwalId);
            });
        });

    document
        .querySelectorAll('[data-modal-hide="edit_jadwal_modal"]')
        .forEach((button) => {
            button.addEventListener("click", () => {
                const modal = button.closest(".modal");
                modal.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");
            });
        });

    function fillModalWithData(jadwalId) {
        // Retrieve data based on jadwalId and fill the modal content
        // This function needs to be implemented based on your data structure
        // Example:
        // const data = getDataById(jadwalId);
        // document.querySelector("#modal-body input[name='jam']").value = data.jam;
        // document.querySelector("#modal-body input[name='mata_kuliah']").value = data.mata_kuliah;
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
