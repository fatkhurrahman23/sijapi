<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    @vite('resources/css/admin.css')
    @vite('resources/js/admin2.js')

    <title class="">Administrator</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar" class="">
      <div class="head">
        <div class="user-img bg-cover  bg-no-repeat bg-admin">
          <div class="bg-admin bg-contain"></div>
        </div>
        <div class="user-details">
          <p class="title font-poppins font-medium ">administrator</p>
          <p class="name">Rais Hannan Rizanto</p>
        </div>
      </div>
      <div class="nav">
        <div class="menu">
          <p class="title font-poppins font-medium">Main</p>
          <ul>
            <!-- <li class="">
              <a href="{{ url('admin/dashboard') }}">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#757575" viewBox="0 0 256 256"><path d="M222.14,105.85l-80-80a20,20,0,0,0-28.28,0l-80,80A19.86,19.86,0,0,0,28,120v96a12,12,0,0,0,12,12H216a12,12,0,0,0,12-12V120A19.86,19.86,0,0,0,222.14,105.85ZM204,204H52V121.65l76-76,76,76Z"></path></svg>
                <span class="text">Dashboard</span>
              </a>
            </li> -->
            <li>
              <a href="#">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#757575" viewBox="0 0 256 256"><path d="M234.38,210a123.36,123.36,0,0,0-60.78-53.23,76,76,0,1,0-91.2,0A123.36,123.36,0,0,0,21.62,210a12,12,0,1,0,20.77,12c18.12-31.32,50.12-50,85.61-50s67.49,18.69,85.61,50a12,12,0,0,0,20.77-12ZM76,96a52,52,0,1,1,52,52A52.06,52.06,0,0,1,76,96Z"></path></svg>
                <span class="text font-poppins font-medium">User</span>
                <i class="arrow ph-bold ph-caret-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin/dosen') }}">
                    <span class="text">Dosen</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/mahasiswa') }}">
                    <span class="text">Mahasiswa</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#757575" viewBox="0 0 256 256"><path d="M244,204H232V99.3A12,12,0,0,0,228,76H188V51.3A12,12,0,0,0,184,28H40a12,12,0,0,0-4,23.3V204H24a12,12,0,0,0,0,24H244a12,12,0,0,0,0-24ZM208,100V204H188V100ZM60,52H164V204H148V160a12,12,0,0,0-12-12H88a12,12,0,0,0-12,12v44H60Zm64,152H100V172h24ZM72,80A12,12,0,0,1,84,68h8a12,12,0,0,1,0,24H84A12,12,0,0,1,72,80Zm48,0a12,12,0,0,1,12-12h8a12,12,0,0,1,0,24h-8A12,12,0,0,1,120,80ZM72,120a12,12,0,0,1,12-12h8a12,12,0,0,1,0,24H84A12,12,0,0,1,72,120Zm48,0a12,12,0,0,1,12-12h8a12,12,0,0,1,0,24h-8A12,12,0,0,1,120,120Z"></path></svg>                
                <span class="text font-poppins font-medium">Fakultas</span>
                <i class="arrow ph-bold ph-caret-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin/jurusan') }}">
                    <span class="text ">Jurusan</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/data_prodi') }}">
                    <span class="text ">Prodi</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/kelas_mahasiswa') }}">
                    <span class="text">Kelas Mahasiswa</span>
                  </a>
                </li>
              </ul>
            </li>
            <li></li>
            <li>
              <a href="#">
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#757575" viewBox="0 0 256 256"><path d="M232,44H160a43.86,43.86,0,0,0-32,13.85A43.86,43.86,0,0,0,96,44H24A12,12,0,0,0,12,56V200a12,12,0,0,0,12,12H96a20,20,0,0,1,20,20,12,12,0,0,0,24,0,20,20,0,0,1,20-20h72a12,12,0,0,0,12-12V56A12,12,0,0,0,232,44ZM96,188H36V68H96a20,20,0,0,1,20,20V192.81A43.79,43.79,0,0,0,96,188Zm124,0H160a43.71,43.71,0,0,0-20,4.83V88a20,20,0,0,1,20-20h60Z"></path></svg>
                <span class="text font-poppins font-medium">Penjadwalan</span>
                <i class="arrow ph-bold ph-caret-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin/matkul') }}">
                    <span class="text">Mata kuliah</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/hari') }}">
                    <span class="text">Hari</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/jam') }}">
                    <span class="text">Jam</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/ruang') }}">
                    <span class="text">Ruang</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/enrollment') }}">
                    <span class="text">Enrollment</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/jadwal_kuliah') }}">
                    <span class="text">Jadwal kuliah</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="{{ url('admin/tahun_akademik') }}">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#757575" viewBox="0 0 256 256"><path d="M208,28H188V24a12,12,0,0,0-24,0v4H92V24a12,12,0,0,0-24,0v4H48A20,20,0,0,0,28,48V208a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V48A20,20,0,0,0,208,28ZM68,52a12,12,0,0,0,24,0h72a12,12,0,0,0,24,0h16V76H52V52ZM52,204V100H204V204Zm60-80v56a12,12,0,0,1-24,0V143.32a12,12,0,0,1-9.37-22l16-8A12,12,0,0,1,112,124Zm61.49,33.88L163.9,168H168a12,12,0,0,1,0,24H136a12,12,0,0,1-8.71-20.25L155.45,142a4,4,0,0,0,.55-2,4,4,0,0,0-7.47-2,12,12,0,0,1-20.78-12A28,28,0,0,1,180,140a27.77,27.77,0,0,1-5.64,16.86A10.63,10.63,0,0,1,173.49,157.88Z"></path></svg>
                <span class="text font-poppins font-medium">Tahun Akademik</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="menu">
          <p class="title font-poppins font-medium">Account</p>
          <ul>
            <li>
              <a href="/logout">
                <i class="icon ph-bold ph-sign-out"></i>
                <span class="text font-poppins font-medium">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav class=" justify-between">
        <div class="data flex justify-center items-center">
          <i class="bx bx-menu"></i>
          <div class="bg-sijapi-update bg-contain ml-8 w-24 h-7  bg-no-repeat "></div>
        </div>
        <div class="flex justify-center items-center">
          <a href="#" class="notification pr-2">
            <i class="bx bxs-bell"></i>
            <span class="num mr-2">8</span>
          </a>
        </div>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            @yield('content')
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
  </body>
</html>
