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
                title: "Data Kelas",
                exportOptions: {
                    columns: [0, 1, 2],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*"];
                },
            },
        ],
    });
    let totalKelasElement = $("#totalKelas");

    function updateTotalKelas() {
        let totalKelas = table.rows().count();
        totalKelasElement.text(totalKelas);
    }

    // Panggil fungsi updateTotalKelas saat tabel diperbarui
    table.on("draw", function () {
        updateTotalKelas();
    });

    // Panggil fungsi updateTotalKelas saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalKelas();
    });

    // Pertama kali, panggil fungsi updateTotalKelas
    updateTotalKelas();

    let totalKelasTIElement = $("#totalKelasTI");

    function updateTotalKelasTI() {
        let totalKelasTI = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[3].includes("TI"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalKelasTIElement.text(totalKelasTI);
    }

    // Panggil fungsi updateTotalKelasTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalKelasTI();
    });

    // Pertama kali, panggil fungsi updateTotalKelasTI
    updateTotalKelasTI();

    let totalKelasIKElement = $("#totalKelasIK");

    function updateTotalKelasTRK() {
        let totalKelasIK = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[3].includes("IK"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalKelasIKElement.text(totalKelasIK);
    }

    // Panggil fungsi updateTotalKelasTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalKelasTRK();
    });

    // Pertama kali, panggil fungsi updateTotalKelasTI
    updateTotalKelasTRK();
});

document.querySelector("table").addEventListener("click", (event) => {
    if (
        event.target.matches('[data-modal-toggle="edit_kelasmahasiswa_modal"]')
    ) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_kelasmahasiswa_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
