<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite('resources/css/header.css')
    @vite('resources/js/header.js')
    
</head>

<body class="">
    <div class="contain overflow-x-hidden">
        <nav class=" bg-custom-birutua flex justify-between fixed items-center mx-auto h-12 z-50" id="navbar">
            <div class="w-screen h-full justify-between flex mx-2 ">
                <p class="ml-7 justify-start flex  items-center font-poppins font-bold  h-full text-xl sm:text-2xl text-custom-tomat w-96">S I J A P I</p>
                <div class="h-full w-96 items-center  flex justify-between">
                    <ul class=" gap-12  mx-auto hidden sm:flex z-50">
                        <li><a href="{{ url('dosen/page/beranda') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base ">Beranda</a></li>  
                        <li><a href="{{ url('dosen/page/jadwal') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base ">Jadwal</a></li>
                        <li><a href="{{ url('dosen/page/presensi') }}" class="font-poppins font-normal text-custom-putih text-sm md:text-base lg:text-base">Presensi</a></li>
                    </ul>
                </div>
                <a class="w-96  items-center flex justify-end font-poppins mr-12" href="/logout">
                    <button class="bg-custom-birutua to-custom-birumuda text-ls sm:text-base  border border-solid border-custom-putih text-custom-putih font-semibold px-3 py-1 rounded-lg ">
                        Log out
                    </button>
                </a>
            </div>
            <div class="fixed bg-custom-birutua w-full bottom-0 h-12 z-50 sm:hidden">
                <div class="mx-4 my-2">
                    <ul class="flex mx-auto  justify-around w-full ">
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path fill="#FFD717" d="M261.56 101.28a8 8 0 00-11.06 0L66.4 277.15a8 8 0 00-2.47 5.79L63.9 448a32 32 0 0032 32H192a16 16 0 0016-16V328a8 8 0 018-8h80a8 8 0 018 8v136a16 16 0 0016 16h96.06a32 32 0 0032-32V282.94a8 8 0 00-2.47-5.79z"/><path d="M490.91 244.15l-74.8-71.56V64a16 16 0 00-16-16h-48a16 16 0 00-16 16v32l-57.92-55.38C272.77 35.14 264.71 32 256 32c-8.68 0-16.72 3.14-22.14 8.63l-212.7 203.5c-6.22 6-7 15.87-1.34 22.37A16 16 0 0043 267.56L250.5 69.28a8 8 0 0111.06 0l207.52 198.28a16 16 0 0022.59-.44c6.14-6.36 5.63-16.86-.76-22.97z" fill="#FFD717" stroke="#FFD717"/></svg>
                                <a href="{{ url('dosen/page/beranda') }}" class="font-poppins text-ls text-custom-kuning">Beranda</a>
                            </li>
                        </button>
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path d="M428 224H288a48 48 0 01-48-48V36a4 4 0 00-4-4h-92a64 64 0 00-64 64v320a64 64 0 0064 64h224a64 64 0 0064-64V228a4 4 0 00-4-4zm-92 160H176a16 16 0 010-32h160a16 16 0 010 32zm0-80H176a16 16 0 010-32h160a16 16 0 010 32z" fill="#fff"/><path fill="#fff" d="M419.22 188.59L275.41 44.78a2 2 0 00-3.41 1.41V176a16 16 0 0016 16h129.81a2 2 0 001.41-3.41z"/></svg>                                
                                <a href="{{ url('dosen/page/jadwal') }}" class="font-poppins text-ls text-custom-putih">Jadwal</a>
                            </li>
                        </button>
                        <button>
                            <li class=" flex flex-col items-center justify-between gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" width="16px" height="16px" viewBox="0 0 512 512"><path fill="#fff" d="M439.91 112h-23.82a.09.09 0 00-.09.09V416a32 32 0 0032 32 32 32 0 0032-32V152.09A40.09 40.09 0 00439.91 112z"/><path fill="#fff" d="M384 416V72a40 40 0 00-40-40H72a40 40 0 00-40 40v352a56 56 0 0056 56h342.85a1.14 1.14 0 001.15-1.15 1.14 1.14 0 00-.85-1.1A64.11 64.11 0 01384 416zM96 128a16 16 0 0116-16h64a16 16 0 0116 16v64a16 16 0 01-16 16h-64a16 16 0 01-16-16zm208 272H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 368h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 400zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 304h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 336zm0-64H112.45c-8.61 0-16-6.62-16.43-15.23A16 16 0 01112 240h191.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 272zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 01240 176h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 208zm0-64h-63.55c-8.61 0-16-6.62-16.43-15.23A16 16 0 01240 112h63.55c8.61 0 16 6.62 16.43 15.23A16 16 0 01304 144z"/></svg>
                                <a href="{{ url('dosen/page/presensi') }}" class="font-poppins text-ls text-custom-putih">Presensi</a>
                            </li>
                        </button>
                
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const productElement = document.querySelector(".slowshake6");

        if (productElement) {
          productElement.addEventListener("mouseenter", function () {
            // Add the 'slow-shake' class on mouse enter
            productElement.classList.add("slow-shake");
          });

          productElement.addEventListener("mouseleave", function () {
            // Remove the 'slow-shake' class on mouse leave
            productElement.classList.remove("slow-shake");
          });
        }
      });
    </script>
    <script>
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar").style.top = "0";
        } else {
          document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
      };
    </script>
</body>

</html>
