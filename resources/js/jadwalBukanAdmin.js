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
                title: "Data Prodi",
                exportOptions: {
                    columns: [0, 1, 2],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*"];
                },
            },
        ],
    });
    let totalProdiElement = $("#totalProdi");

    function updateTotalProdi() {
        let totalProdi = table.rows().count();
        totalProdiElement.text(totalProdi);
    }

    // Panggil fungsi updateTotalProdi saat tabel diperbarui
    table.on("draw", function () {
        updateTotalProdi();
    });

    // Panggil fungsi updateTotalProdi saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalProdi();
    });

    // Pertama kali, panggil fungsi updateTotalProdi
    updateTotalProdi();

    let totalProdiTIElement = $("#totalProdiTI");

    function updateTotalProdiTI() {
        let totalProdiTI = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[1].includes("TI"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalProdiTIElement.text(totalProdiTI);
    }

    // Panggil fungsi updateTotalProdiTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalProdiTI();
    });

    // Pertama kali, panggil fungsi updateTotalProdiTI
    updateTotalProdiTI();

    let totalProdiIKElement = $("#totalProdiIK");

    function updateTotalProdiTRK() {
        let totalProdiIK = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[1].includes("IK"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalProdiIKElement.text(totalProdiIK);
    }

    // Panggil fungsi updateTotalProdiTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalProdiTRK();
    });

    // Pertama kali, panggil fungsi updateTotalProdiTI
    updateTotalProdiTRK();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_dataprodi_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_dataprodi_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
