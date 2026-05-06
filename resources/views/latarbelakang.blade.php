@extends('layouts.layout')

@section('content')
<style>
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
    margin-bottom: 3rem; /* Margin bawah untuk mb-5 (sesuaikan dengan ukuran yang diinginkan) */
}

/* Styling untuk card body */
.card-body {
    padding: 20px;
}

.animated-hr {
    border: 0;
    height: 4px;
    background: linear-gradient(to right, green 0%, yellow 100%);
    background-size: 200% 100%;
    animation: moveHr 3s linear forwards;
    width: 100%;
    margin: auto;
}

@keyframes moveHr {
    0% {
        background-position: 100% 0;
    }
    100% {
        background-position: 0% 0;
    }
}

.widget.widget-nav-menu ul li a {
    display: block;
    padding: 10px 20px 10px 18px;
    position: relative;
    background-color: #fff;
    z-index: 2;
    font-weight: 500;
    font-size: 18px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    text-decoration: none;
    border-bottom: 1px solid #e8ecef;
}

li {
    text-align: left;
}

ol, ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.widget.widget-nav-menu ul li {
    position: relative;
    overflow: hidden;
    z-index: 2;
}

.widget.widget-nav-menu ul li a {
    display: block;
    position: relative;
    /* z-index: 2; */
    color: black; /* Warna teks default */
    transition: color 0.3s ease-in-out; /* Transisi warna teks */
}

.widget.widget-nav-menu ul li a::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    transition: left 0.3s ease-in-out;
    background: linear-gradient(90deg, #1c8452, #d8c616);
    z-index: -1;
    border-top-right-radius: 20px;
    /* border-bottom-right-radius: 20px; */
}

.widget.widget-nav-menu ul li:hover a::before,
.widget.widget-nav-menu ul li.active a::before {
    left: 0;
}

.widget.widget-nav-menu ul li:hover a,
.widget.widget-nav-menu ul li.active a {
    color: white; /* Warna teks ketika dihover atau aktif */
}

</style>

<div class="row">
    <div class="col-sm-8">  
        <div class="card mb-5">
            <div class="card-body">
    <h1>Latar Belakang</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>PT. Jamkrida NTB Syariah merupakan Badan Usaha Milik Daerah (BUMD) yang bergerak dalam bidang usaha Pembiayaan Syariah, didirikan berdasarkan Peraturan Daerah Provinsi Nusa Tenggara Barat Nomor 2 Tahun 2012 tentang “Pembentukan Lembaga Penjaminan Kredit Daerah” pada tanggal 15 Oktober 2012 sesuai Akta Notaris Abdullah, SH di Mataram Nomor : 24 tanggal 15 Oktober 2012 yang telah mendapatkan pengesahan oleh Departemen Hukum dan Hak Asasi Manusia Republik Indonesia Nomor : AHU-12807.AH.01.02 tahun 2012 tanggal 01 Nopember 2012. PT. Jamkrida NTB Syariah didirikan dengan maksud untuk melakukan Pembiayaan bagi Koperasi dan Usaha Mikro Kecil dan Menengah (UMKM) guna mempercepat pertumbuhan perekonomian didaerah Nusa Tenggara Barat pada khususnya dan di Indonesia pada umumnya dan telah memperoleh izin operasional dari Menteri Keuangan Republik Indonesia Nomor : KEP-652/KM.10/2012 tanggal 06 Desember 2012.</p>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <li class="text-capital"><a href="/latar_belakang">Latar Belakang</a></li>
            <li class="text-capital"><a href="/kepemilikan">Kepemilikan</a></li>
            <li class="text-capital"><a href="/visi-misi">Visi dan Misi</a></li>
            <li class="text-capital"><a href="/struktur">Struktur Organisasi</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection