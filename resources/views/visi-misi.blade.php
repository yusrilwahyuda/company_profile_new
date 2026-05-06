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
    text-align: justify;
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

*{
    font-family: 'Poppins', sans-serif;
}

</style>

<div class="row">
    <div class="col-sm-8">  
        <div class="card mb-5">
            <div class="card-body">
    <h1>Visi - Misi</h1>
    <hr class="animated-hr">
    <br>
    <h3>Visi | PT. Jamkrida NTB Syariah</h3>
    <p style='text-align: justify'>"Terwujudnya perusahaan penjamin kredit daerah yang sehat, berdaya saing dan mampu mendorong pertumbuhan ekonomi daerah"</p>
    <h3>Misi | PT. Jamkrida NTB Syariah</h3>
    <p style='text-align: justify'>
        <ul style='list-style: number;'>
            <li>Mengembangkan bisnis perusahaan sehingga mampu menguasai sebagian besar pasar bisnis penjaminan kredit di NTB terutama bisnis penjaminan kredit usaha produktif (Kredit Mikro, Kecil, Menengah dan Koperasi) dan kredit Non-Produktif lain (seperti KSG dan KPR) yang berada pada berbagai Bank terutama Bank milik Pemerintah Provinsi/Pemerintah Kabupaten/Pemerintah Kota.</li>
            <li>Mengembangkan bisnis penjaminan untuk proyek pengadaan barang dan jasa yang dibiayai APBN, APBD I dan APBD II se-NTB.</li>
            <li>Memperkuat askes permodalan usaha bagi pelaku ekonomi skala kecil yang tidak memiliki agunan namun memiliki prospek usaha yang baik</li>
            <li>Memberikan proteksi terhadap kemungkinan terjadinya kredit macet pada kredit mikro, kecil dan koperasi</li>
            <li>Mewujudkan BUMD yang mampu memberikan kontribusi positif pada peningkatan PAD NTB maupun PAD masing-masing kabupaten/kota.</li>
        </ul>
    </p>
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