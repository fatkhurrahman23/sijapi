document.querySelector("table").addEventListener("click", (event) => {
    if (event.target.matches('[data-modal-toggle="edit_ruang_modal"]')) {
        const modalId = event.target.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("animate-slide-in");
        document.body.classList.add("overflow-hidden");
    }
});

document
    .querySelectorAll('[data-modal-hide="edit_ruang_modal"]')
    .forEach((modalClose) => {
        modalClose.addEventListener("click", () => {
            const modal = modalClose.closest(".modal");
            modal.classList.add("hidden");
            modal.classList.remove("animate-slide-in");
            document.body.classList.remove("overflow-hidden");
        });
    });

function hapusDataProdi(kode_prodi) {
    if (confirm("Apakah Anda yakin ingin menghapus data prodi ini?")) {
        axios
            .delete(`/admin/prodi/${kode_prodi}`)
            .then((response) => {
                // Handle successful deletion
                console.log(response);
                window.location.reload(); // Refresh halaman setelah penghapusan berhasil
            })
            .catch((error) => {
                // Handle error
                if (error.response.status === 500) {
                    alert(
                        "Tidak dapat menghapus data prodi karena ada data terkait yang masih ada."
                    );
                } else {
                    console.error("An error occurred");
                }
            });
    }
}
