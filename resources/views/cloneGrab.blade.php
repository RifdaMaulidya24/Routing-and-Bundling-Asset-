<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/gaya.css">
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
        <div class="container-fluid" id="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/menu_24dp_5F6368.svg') }}" alt="Gambar" width= "50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="Gambar" width="70" height="50">
                </a>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jadilah Mitra Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="https://www.grab.com/id/driver/drive/">Pengemudi Car</a></li>
                            <li><a class="dropdown-item" href="https://www.grab.com/id/driver/drive/">Pengemudi Bike</a></li>
                            <li><a class="dropdown-item" href="https://www.grab.com/id/merchant/food/">Mitra GrabFood</a></li>
                            <li><a class="dropdown-item" href="https://www.grab.com/id/merchant/mart/">Mitra GrabMart</a></li>
                            <li><a class="dropdown-item" href="https://www.grab.com/id/merchant/kios/">Mitra GrabKios</a></li>
                            <li><a class="dropdown-item" href="https://www.grab.com/id/transport/">Mitra GrabWheels</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://help.grab.com/passenger/id-id/" id="pusatBantuan">Pusat Bantuan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="navbar-brand" href="#" id="language">
                            <img src="{{ Vite::asset('resources/images/language_24dp_5F6368.svg') }}" alt="Gambar" width="20" height="20">
                        </a>
                    </li>
                    <li class="nav-item dropdown" id="Bahasa">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bahasa Indonesia
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
                            <li><a class="dropdown-item" href="https://www.grab.com/id/en/">English</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSearchInput()">
                            <img src="{{ Vite::asset('resources/images/search_24dp_5F6368.svg') }}" alt="Gambar" width="30" height="30">
                        </a>
                    </li>
                    <li class="nav-item">
                        <input id="search-input" class="form-control me-2" type="text" placeholder="Search...">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <video controls>
        <source src="{{ Vite::asset('resources/video/hero_banner_sg_q50.webm') }}" alt="Hero Video" autoplay loop muted>
        Your browser does not support the video tag.
    </video>

    <div class="text-overlay">
        Grab. Jadikan Setiap Hari <br> Lebih Istimewa.
    </div>
    

    <div class="tentang-kami-container">
        <!-- Section: Tentang Kami -->
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" id="tentang-kami-container" href="https://www.grab.com/id/about/"><b>Tentang Kami</b></a>
            </div>
        </nav>
    </div>

    <div class="unduh-aplikasi-container">
        <!-- Section: Unduh Aplikasi -->
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" id="unduh-aplikasi-container" href="https://grab.onelink.me/2695613898?pid=website&amp;c=ID_homepage_download_app&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DMAIN&amp;af_force_deeplink=true&amp;af_sub5=organic&amp;af_web_dp=https%3A%2F%2Fwww.grab.com%2Fid%2Fdownload%2F"><b>Unduh Aplikasi</b></a>
            </div>
        </nav>
    </div>

    
<script>
    function toggleSearchInput() {
        var searchInput = document.getElementById('search-input');
        if (searchInput.style.display === 'none' || searchInput.style.display === '') {
            searchInput.style.display = 'block';                
            searchInput.focus(); 
            } else {
            searchInput.style.display = 'none';
            }
        }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
