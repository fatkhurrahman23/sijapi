document
    .getElementById("tambahMahasiswaForm")
    .addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah form untuk melakukan submit langsung

        // Kirim data form secara asynchronous dengan fetch
        fetch(this.action, {
            method: this.method,
            body: new FormData(this),
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                // Tampilkan pesan atau lakukan perubahan yang diperlukan di halaman tanpa redirect
                console.log(data);
            })
            .catch((error) => console.error("Error:", error));
    });
