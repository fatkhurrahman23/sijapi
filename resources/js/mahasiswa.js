import DataTable from "datatables.net-dt";
import "datatables.net-buttons-dt";
import "datatables.net-responsive-dt";
import jsPDF from "jspdf";

// DataTables initialization

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
                title: "Data Mahasiswa",
                exportOptions: {
                    columns: [0, 1, 2, 3],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = ["*", "*", "*", "*"];
                },
            },
        ],
    });

    let totalMahasiswaElement = $("#totalMahasiswa");

    function updateTotalMahasiswa() {
        let totalMahasiswa = table.rows().count();
        totalMahasiswaElement.text(totalMahasiswa);
    }

    // Panggil fungsi updateTotalMahasiswa saat tabel diperbarui
    table.on("draw", function () {
        updateTotalMahasiswa();
    });

    // Panggil fungsi updateTotalMahasiswa saat data baru ditambahkan
    $("#tambahDataButton").on("click", function () {
        // Kode untuk menambahkan data baru ke tabel
        table.row.add([]).draw();
        updateTotalMahasiswa();
    });

    // Pertama kali, panggil fungsi updateTotalMahasiswa
    updateTotalMahasiswa();

    let totalMahasiswaTIElement = $("#totalMahasiswaTI");

    function updateTotalMahasiswaTI() {
        let totalMahasiswaTI = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[3].includes("TI"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalMahasiswaTIElement.text(totalMahasiswaTI);
    }

    // Panggil fungsi updateTotalMahasiswaTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalMahasiswaTI();
    });

    // Pertama kali, panggil fungsi updateTotalMahasiswaTI
    updateTotalMahasiswaTI();

    let totalMahasiswaIKElement = $("#totalMahasiswaIK");

    function updateTotalMahasiswaTRK() {
        let totalMahasiswaIK = table
            .rows()
            .data()
            .toArray()
            .filter(function (row) {
                return row[3].includes("IK"); // Menggunakan indeks kolom (indeks dimulai dari 0)
            }).length;
        totalMahasiswaIKElement.text(totalMahasiswaIK);
    }

    // Panggil fungsi updateTotalMahasiswaTI saat tabel diperbarui
    table.on("draw", function () {
        updateTotalMahasiswaTRK();
    });

    // Pertama kali, panggil fungsi updateTotalMahasiswaTI
    updateTotalMahasiswaTRK();
});
document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_mahasiswa_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_mahasiswa_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });
