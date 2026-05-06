<!DOCTYPE html>

<html lang="en">

<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    /* font-family: 'Poppins', sans-serif; */
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.col-sm-4 {
    flex: 1 1 calc(25% - 20px);
    display: flex;
}

p {
    font-family: 'Poppins', sans-serif;
}

.card1 {
    border: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
    margin-bottom: 3rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    border-radius: 20px;
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
}

.thumbnail img {
    width: 50%;
    margin: 0 auto;
}

.caption {
    padding-top: 15px;
}

.caption h3 {
    margin-top: 0;
}

.caption p {
    flex-grow: 1;
    margin-bottom: 0;
    text-align: justify;
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
    max-width: 90%; /* Batasan lebar carousel */
    margin: 0 auto; /* Agar berada di tengah */
    transition: transform 0.5s, box-shadow 0.5s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.carousel-item img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
    border-radius: 10px;
}

.templateux-footer {
    position: relative;
    padding: 20px;
    border: 3px solid transparent;
    border-radius: 30px;
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
.jumbotron2{
    background: url('/logo/corakjnswhite.png') no-repeat center center;
    background-size: cover;
    padding: 50px 0;
    background-color: #F2F3F4;
    padding-top: 3%;
    padding-bottom: 3%;
    margin : 10px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
}

.jumbotron1{
    background-color: #F2F3F4;
    padding-top: 3%;
    padding-bottom: 3%;
    margin : 10px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    /* margin : 10px; */
}
.navbar {
    position: relative;
}

.nav-item {
    position: relative;
}

.nav-item:hover::before {
    content: 'بِسْمِ ٱللَّٰهِ';
    position: absolute;
    top: -10px; /* Adjust this value to position the kaligrafi above the menu */
    left: 50%;
    transform: translateX(-50%);
    color: #1c8452;;
    font-size: 10px; /* Adjust the font size as needed */
    white-space: nowrap;
    opacity: 0;
    animation: moveKaligrafi 1s forwards;
}

@keyframes moveKaligrafi {
    0% {
        opacity: 0;
        transform: translateX(-50%) translateY(-10px);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
}

.nav-link {
    color: #1c8452;;
    text-align: right;
    font-family: 'Poppins', sans-serif;
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

.nav-item:hover .dropdown-item {
    background: linear-gradient(90deg, #1c8452 0%, #1c8452 2%, #d8c616 5%, white 5%);
    /* margin-bottom: 10px; */
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
                <a class="nav-link" href="#" style='color : #1c8452;'> BERANDA</a>
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
<!-- Jumbotron -->
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/logo/1.jpg"  class="d-block w-100" height="600" >
            </div>
            <div class="carousel-item">
                <img src="/logo/santunan.jpg" class="d-block w-100" height="600" >
            </div>
            <div class="carousel-item">
                <img src="/logo/hut.jpeg" class="d-block w-100" height="600">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <br>
    

    <div class="jumbotron2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <h1 style="color : #1c8452;">PT. Jamkrida NTB Syariah</h1>
                    <p>Merupakan Badan Usaha Milik Daerah (BUMD) yang bergerak dalam bidang usaha Pembiayaan Syariah, didirikan berdasarkan Peraturan Daerah Provinsi Nusa Tenggara Barat Nomor 2 Tahun 2012.</p>
                    <p style="color: #1c8452;"><i><strong>( Syariah Bisnisnya, Berkah Tujuannya )</strong></i></p>
                </div>
                <div class="col-sm-7 text-center">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/LY-4MS6MGtU?si=Y3ejN3vZBzyatTW_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>



<!-- tentang produk -->
<div class="container">
        <center>
          <h1 style="color : #1c8452;">Informasi Produk</h1>
          <!-- <h4> <br> -->
        </center>
    <div class="row">
        <div class="col-sm-4">
        <div class="card1">
        <div class="card-body">
            <div class="thumbnail">
                <a href="#"><center><img src="/produk/sb.png" width="50%" alt="sb"></center></a>
                <div class="caption">
                    <center><h3><a href="#" style="text-decoration:none;color: black ;">SuretyBond</a> </h3></center>
                    <p align='justify'>Merupakan suata perjanjian tiga pihak antara penjamin kepada terjamin secara bersama-sama berjanji kepada penerima jaminan bahwa apabila terjamin oleh sebab suatu hal menjadi gagal melaksanakan pekerjaan</p>
                    </div></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card1">
        <div class="card-body">
            <div class="thumbnail">
                <a href="#"><center><img src="/produk/garansi.png" width="50%" alt="garansi"></center></a>
                <div class="caption">
                <center><h3><a href="#" style="text-decoration:none;color: black ;"></a> Bank Garansi</h3></center>
                    <p align='justify'>Merupakan penjaminan atas fasilitas bank garansi dari penerima jaminan yang diterima terjamin yang ditebitkan sebelum atau sesudah bank garansi</p>
                    </div></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card1">
        <div class="card-body">
            <div class="thumbnail">
                <a href="#"><center><img src="/produk/syariah.png"  width="50%" alt="syariah"></center></a>
                <div class="caption">
                <center><h3><a href="#" style="text-decoration:none;color: black ;">Pejaminan Pembiayaan Syariah</a> </h3></center>
                    <p align='justify'>Merupakan penjaminan Pembiayaan Syariah</p>
                </div></div><div></div>
            </div>
        </div>
    </div>
</div></div>

<!-- Berita -->
<div class="jumbotron2">
  <div class="text-center container" style="margin-bottom:0">
          <center>
            <h1 style="color : #1c8452;">Kegiatan Kami</h1><br>
          </center>
          <div class="row">
            <div class="col-sm-3 ">
                <div class="thumbnail ">
                  <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C73lXndyG4c/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C73lXndyG4c/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C73lXndyG4c/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by PT Jamkrida NTB Bersaing (@jamkridantb)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
            <div class="col-sm-1 ">
              <div class="thumbnail ">
              </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                  <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C72lyXDBR11/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C72lyXDBR11/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C72lyXDBR11/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by PT Jamkrida NTB Bersaing (@jamkridantb)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
            <div class="col-sm-1 ">
              <div class="thumbnail ">
              </div>
            </div>
            <div class="col-sm-3 ">
                <div class="thumbnail">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C7ybBDdy1nn/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C7ybBDdy1nn/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C7ybBDdy1nn/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by PT Jamkrida NTB Bersaing (@jamkridantb)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
          </div>
        </div>
	</div>
</div>
    <div class="container">
        <center>
          <h1 style="color : #1c8452;">Mitra</h1>
          <!-- <h4> <br> -->
        </center>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="logo-container">
                <div class="logo-wrapper">
                    <img src="/logo/ntbs.png" alt="logo" style="width:200px;">
                    <img src="/logo/bpr.png" alt="logo" style="width:200px;">
                    <img src="/logo/logoBSK.png" alt="logo" style="width:200px;">
                    <img src="/logo/logoDinar.png" alt="logo" style="width:200px;">
                    <img src="/logo/logoTulenAmanah.png" alt="logo" style="width:100px;">
                    <img src="/logo/logoPatuh.jpg" alt="logo" style="width:100px;">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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