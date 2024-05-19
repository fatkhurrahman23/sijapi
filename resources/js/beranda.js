document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carouselExampleCaptions");
    const prevButton = document.querySelector("[data-twe-slide='prev']");
    const nextButton = document.querySelector("[data-twe-slide='next']");
    const carouselItems = carousel.querySelectorAll("[data-twe-carousel-item]");
    const carouselIndicators = carousel.querySelectorAll(
        "[data-twe-carousel-indicators] button"
    );
    let currentIndex = 0;

    // Fungsi untuk menampilkan slide berikutnya
    function showNextSlide() {
        updateIndicator(
            currentIndex,
            (currentIndex + 1) % carouselItems.length
        );
        carouselItems[currentIndex].style.transform = "translateX(-100%)";
        currentIndex = (currentIndex + 1) % carouselItems.length;
        carouselItems[currentIndex].classList.remove("hidden");
        carouselItems[currentIndex].style.transform = "translateX(0)";
    }

    // Fungsi untuk menampilkan slide sebelumnya
    function showPrevSlide() {
        updateIndicator(
            currentIndex,
            (currentIndex - 1 + carouselItems.length) % carouselItems.length
        );
        carouselItems[currentIndex].style.transform = "translateX(100%)";
        currentIndex =
            (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        carouselItems[currentIndex].classList.remove("hidden");
        carouselItems[currentIndex].style.transform = "translateX(0)";
    }

    // Fungsi untuk memperbarui indikator strip
    function updateIndicator(prevIndex, nextIndex) {
        carouselIndicators[prevIndex].classList.remove("opacity-100");
        carouselIndicators[prevIndex].classList.add("opacity-50");
        carouselIndicators[nextIndex].classList.remove("opacity-50");
        carouselIndicators[nextIndex].classList.add("opacity-100");
    }

    // Tampilkan slide pertama saat halaman pertama kali dimuat
    updateIndicator(currentIndex, currentIndex);
    carouselItems[currentIndex].classList.remove("hidden");
    carouselItems[currentIndex].style.transform = "translateX(0)";

    // Tambahkan event listener untuk tombol prev dan next
    prevButton.addEventListener("click", showPrevSlide);
    nextButton.addEventListener("click", showNextSlide);
});

$(document).ready(function () {
    const typewriterElement = document.querySelector(".hometype");
    const phrases = [
        "SELAMAT DATANG DI SIJAPI",
        "APLIKASI PENJADWALAN PRESENSI",
    ];
    let currentPhraseIndex = 0;

    function typeWriter(text, i, callback) {
        if (i < text.length) {
            typewriterElement.innerHTML += text.charAt(i);
            i++;
            setTimeout(function () {
                typeWriter(text, i, callback);
            }, 100);
        } else {
            setTimeout(callback, 1000);
        }
    }

    function eraseText(callback) {
        let text = typewriterElement.innerHTML;
        let i = text.length - 1;

        const erasingInterval = setInterval(function () {
            text = text.substring(0, i);
            typewriterElement.innerHTML = text;
            i--;

            if (i < 0) {
                clearInterval(erasingInterval);
                callback();
            }
        }, 50);
    }

    function nextPhrase() {
        eraseText(function () {
            currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
            typewriterElement.innerHTML = " ";
            typeWriter(phrases[currentPhraseIndex], 0, nextPhrase);
        });
    }

    // Start the typewriter effect
    typeWriter(phrases[currentPhraseIndex], 0, nextPhrase);
});
