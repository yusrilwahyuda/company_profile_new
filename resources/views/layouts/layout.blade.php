<!DOCTYPE html>

<html lang="en">

<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

p {
    font-family: 'Poppins', sans-serif;
}

body{
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
}

nav .left img{
    width: 90px;
}

.logo-container {
    display: flex;
    overflow: hidden;
    height: 200px; 
}
  
.logo-wrapper {
    /* display: flex; */
    animation: slide 10s linear infinite;
}

@keyframes slide {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

nav{
    display: flex;
    justify-content: space-between;
    min-height: 80px;
    align-items: center;
    border-bottom: 1px solid #DCDCDC;
    padding: 0px 5% 0px 5%;
}

nav .right a{
	text-decoration: none;
	color: black;
}

.slides{
	width: 100%;
	height: 20%;
  	position: relative;
	margin-left: auto;
	margin-right: auto;
}

.slides .slide{
    display: none; 
}

.carousel-item img {
    transition: transform 0.5s, box-shadow 0.5s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
}

.carousel-item img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
}

.templateux-footer {
    position: relative;
    padding: 20px;
    border: 3px solid transparent;
}
.templateux-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid green;
    box-sizing: border-box;
    border-radius: 30px;
    animation: border-walk 4s linear infinite;
}

@keyframes border-walk {
    0% {
        clip-path: inset(0 100% 100% 0);
    }
    25% {
        clip-path: inset(0 0 100% 0);
    }
    50% {
        clip-path: inset(0 0 0 0);
    }
    75% {
        clip-path: inset(0 0 0 100%);
    }
    100% {
        clip-path: inset(100% 0 0 0);
    }
}

.slides .navigation{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.slides .navigation .prev, .slides .navigation .next{
  cursor: pointer;
  padding: 16px;
  font-weight: bold;
  font-size: 20px;
  color: white;
  background: rgba(0,0,0,0.2);
  user-select: none;
  transition: 0.6s ease;
}

.slides .navigation .prev:hover, .slides .navigation .next:hover{
  background: rgba(0,0,0,1);
}

@keyframes fade {
  from{opacity: 0.3}
  to {opacity: 1}
}
@media (max-width: 992px){
  .slides .navigation .prev, .slides .navigation .next{
    font-size: 18px;
    padding: 13px;
  }
}

@media (max-width: 768px){
  .slides .navigation .prev, .slides .navigation .next{
    font-size: 15px;
    padding: 10px;
  }
}

@media (max-width: 576px){
  .slides .navigation .prev, .slides .navigation .next{
    font-size: 12px;
    padding: 7px;
  }
}

@media (max-width: 360px){
  .slides .navigation .prev, .slides .navigation .next{
    font-size: 11px;
    padding: 6px;
  }
}

.nav-icon{
    background: #1b1b1b;
    width: 3.8rem;
    height:  3.8rem;
    border-radius: 50%;
    border: 0;
    opacity: 0.7;
    text-shadow: none;
    color: #fff;
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav-icon:hover{
    background-color: #4682B4;
    opacity: 1.0;
    transition: all ease 0.3s;
    color: #fff;
}

.navbar{
    max-width: 80%; /* Batasan lebar */
    margin: 0 auto; /* Agar berada di tengah */
    background: white;
    box-sizing: border-box;
    /* border: 1px solid green; */
    height: 60px; 
    animation: border-walk 4s linear forwards;
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan di bawah */
}
@keyframes border-walk {
    0% {
        clip-path: inset(0 100% 100% 0);
    }
    25% {
        clip-path: inset(0 0 100% 0);
    }
    50% {
        clip-path: inset(0 0 0 0);
    }
           
}
.jumbotron1{
    background-color: #F2F3F4;
    padding-top: 3%;
    padding-bottom: 3%;
    margin : 10px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
}
.navbar {
    position: relative;
}

.nav-item {
    position: relative;
}

/* .nav-item:hover::before {
    content: 'بِسْمِ ٱللَّٰهِ';
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-family: 'Brush Script MT', cursive; 
    font-size: 20px; 
    white-space: nowrap;
    opacity: 0;
    animation: moveKaligrafi 1s forwards;
} */

/* @keyframes moveKaligrafi {
    0% {
        opacity: 0;
        transform: translateX(-50%) translateY(-10px);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
} */

/* Your existing styles */
.nav-link {
    color: white;
    text-align: right;
    font-family: 'Poppins', sans-serif;
}

.nav-item:hover .dropdown-item {
    background: linear-gradient(90deg, #1c8452 0%, #1c8452 2%, #d8c616 5%, white 5%);
}

.nav-link:hover {
    color: #cbbc2d !important;
}

.nav-item:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    border-radius: 5px;
    font-family: 'Poppins', sans-serif;
}

.nav-item:hover .dropdown-item:hover {
    background: linear-gradient(90deg, #1c8452, #d8c616);
    color: white;
}

.nav-item:hover .dropdown-item:hover::before {
    content: '➔ ';
    color: white;
}


</style>

<head>
    <title>PT. Jamkrida NTB Syariah </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
    <script src="assets/js2/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-md  navbar-dark" id="navbar_top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="/logo/jns.png" alt="logo" style="width:100px;">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item active">
                <a class="nav-link" href="/" style='color : #1c8452;'> BERANDA</a>
            </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        PROFIL
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profilDropdown">
                        <a class="dropdown-item" href="/latar_belakang">Latar Belakang</a>
                        <a class="dropdown-item" href="/kepemilikan">Kepemilikan</a>
                        <a class="dropdown-item" href="/visi-misi">Visi & Misi</a>
                        <a class="dropdown-item" href="/struktur">Struktur Organisasi</a>
                    </div>
                </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        PRODUK
                    </a>
                    <div class="dropdown-menu" aria-labelledby="produkDropdown" style='color : #1c8452;'>
                        <!-- <a class="dropdown-item" href="/penjaminankredit">Penjaminan Kredit</a> -->
                        <a class="dropdown-item" href="/suretybond">Penjaminan Kredit SuretyBond</a>
                        <a class="dropdown-item" href="/bankgaransi">Penjaminan Bank Garansi</a>
                        <a class="dropdown-item" href="/pembiayaansyariah">Penjaminan Pembiayaan Syariah</a>
                    </div>
                </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="manajemenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        MANAJEMEN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="manajemenDropdown">
                        <a class="dropdown-item" href="#">Mekanisme Penjaminan</a>
                        <a class="dropdown-item" href="#">Kapasitas Penjaminan</a>
                    </div>
                </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="laporanDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        LAPORAN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="laporanDropdown">
                        <a class="dropdown-item" href="/annual_report">Annual Report</a>
                        <a class="dropdown-item" href="/gcg">GCG</a>
                        <!-- <a class="dropdown-item" href="/klaim">Klaim</a> -->
                        <a class="dropdown-item" href="/auditor">Auditor</a>
                        <a class="dropdown-item" href="/renbis">Rencana Bisnis</a>
                    </div>
            </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="ppidDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        PEDOMAN PPID
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ppidDropdown">
                        <a class="dropdown-item" href="/tentang_ppid">Tentang PPID</a>
                        <a class="dropdown-item" href="/kelengkapan_ppid">Kelengkapan PPID</a>
                        <a class="dropdown-item" href="/standard_ppid">Standar Pelayanan</a>
                        <a class="dropdown-item" href="/layanan_ppid">Layanan Pusat Informasi</a>
                        <a class="dropdown-item" href="/peraturan_ppid">Rancangan Peraturan</a>
                        <a class="dropdown-item" href="/pos_ppid">Pos Pelayanan Informasi Publik</a>
                    </div>
            </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="wbsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        PENGADUAN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="wbsDropdown">
                        <a class="dropdown-item" href="/wbs">Whiste-Blowing</a>
                    </div>
            </li>
            <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color : #1c8452;'>
                        SOSIAL MEDIA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <a target =_blank class="dropdown-item" href="https://www.instagram.com/jamkridantbsyariah">Instagram <i class="fab fa-instagram"></i></a>
                        <a target =_blank class="dropdown-item" href="https://www.facebook.com/jamkridantb">Facebook <i class="fab fa-facebook"></i></a>
                        <a target =_blank class="dropdown-item" href="https://api.whatsapp.com/send?phone=6281997770594&amp;text=Saya ingin bertanya sesuatu?">Whatsapp <i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
        </ul>
    </div>
</nav>
<br>


 <div class="container">
        @yield('content')
</div>



<div class="jumbotron1">
 	<div class="text-center container" style="margin-bottom:0">
            <div class="container-fluid">
                <div class="cta-inner">
                    <h2>
                        <span class="words-1" style='color : #1c8452;'>Lokasi PT. Jamkrida NTB Syariah</span> 
                    </h2>
                </div>
            </div>
        </a>
        <!-- END call to action -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.022232302625!2d116.11093371421606!3d-8.593860393823414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf536ab270c9%3A0x744e60f7210c7c8d!2sPT.%20Jamkrida%20NTB%20Bersaing!5e0!3m2!1sid!2sid!4v1632542464333!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div></div>
		
<footer class="templateux-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-md-left text-center">
                            <div class="card">
                                <div class="card-body">
                                   <h4 class="card-title">Informasi Dan Layanan</h4> 
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="media templateux-media mb-4">
                                                <div class="mr-4 icon">
                                                    <span class="icon-map-pin display-3"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="h5">Alamat </h3>
                                                    <p>Jl. Catur Warga No.5, Mataram Tim., Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83125</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-3">
                                            <div class="media templateux-media mb-4">
                                                <div class="mr-4 icon"> 
                                                    <span class="icon-monitor display-3"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="h5">Website</h3>
                                                    <p>www.jamkridantbsyariah.co.id</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-3">
                                            <div class="media templateux-media mb-4">
                                                <div class="mr-4 icon">
                                                    <span class="icon-mail display-3"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="h5">Email</h3>
                                                    <p>jamkridantb@yahoo.co.id</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="media templateux-media mb-4">
                                                <div class="mr-4 icon">
                                                    <span class="icon-phone2 display-3"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="h5">Telp </h3>
                                                    <p>(0370) 639304</p>
                                                </div>
                                            </div>

                                        </div>
										<div class="col-lg-2">

                                            <div class="media templateux-media mb-4">
                                                <div class="mr-4 icon">
                                                    <span class="icon-phone2 display-3"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="h5">Instagram </h3>
                                                    <p>@jamkridantbsyariah</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-md-6 text-md-right text-center footer-social">
                                               
                                            </div>
                                        </div>
                                    </div> 
                                   
                                </div>
                            </div>
               
                     
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | PT. Jamkrida NTB Syariah (PERSERODA)
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    
                </div>
            </div>
        </footer>
</div>


</body>
</html>
<script>
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>
$(document).ready(function() {
    $('.nav-item.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        }
    );
});
</script>