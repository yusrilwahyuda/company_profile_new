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
    font-family: 'Poppins', sans-serif;
}

* {
    font-family: 'Poppins', sans-serif;
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
    <h1>Cara Pengajuan Ke Komisi Informasi Pusat</h1>
    <hr class="animated-hr">
    <br>
    <ul style='list-style: number;'>
        <li>Pemohon Informasi menyampaikan permohonan informasi kepada PPID melalui surat, fax, e-mail, telepon atau datang langsung ke tempat layanan PPID Komisi Informasi Pusat.</li>
        <li>Pemohon Informasi mengisi Formulir Permohonan Informasi dan memberikan salinan identitas diri/organisasi.</li>
        <li>Pemohon Informasi menerima tanda bukti permohonan informasi dari Petugas Informasi apabila syarat permohonan informasi telah dilengkapi.</li>
        <li>Dalam hal permintaan disampaikan secara langsung atau melalui surat elektronik, nomor pendaftaran diberikan saat penerimaan permintaan.</li>
        <li>Dalam hal permintaan disampaikan melalui surat, pengiriman nomor pendaftaran dapat diberikan bersamaan dengan pengiriman informasi.Paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Badan Publik yang bersangkutan wajib menyampaikan pemberitahuan tertulis yang berisikan.</li>
        <li>Informasi yang diminta berada di bawah penguasaannya ataupun tidak</li>
        <li>Badan Publik wajib memberitahukan Badan Publik yang menguasai informasi yang diminta apabila informasi yang diminta tidak berada di bawah penguasaannya dan Badan Publik yang menerima permintaan mengetahui keberadaan informasi yang diminta.</li>
        <li>Penerimaan atau penolakan permintaan dengan alasan informasi yang diminta merupakan informasi yang dikecualikan (dirahasiakan).</li>
        <li>Dalam hal permintaan diterima seluruhnya atau sebagian dicantumkan materi informasi yang akan diberikan.</li>
        <li>Dalam hal suatu dokumen mengandung materi yang dikecualikan maka informasi yang dikecualikan tersebut dapat dihitamkan dengan disertai alasan dan materinya.</li>
        <li>Alat penyampai dan format informasi yang akan diberikan.</li>
        <li>Biaya serta cara pembayaran untuk memperoleh informasi yang diminta</li>
        <li>Badan Publik yang bersangkutan dapat memperpanjang waktu untuk mengirimkan pemberitahuan sesuai dengan ketentuan yang berlaku, paling lambat 7 (tujuh) hari kerja berikutnya dengan memberikan alasan secara tertulis.</li>
    </ul>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <li class="text-capital"><a href="/tentang_ppid">Tentang PPID</a></li>
            <li class="text-capital"><a href="/kelengkapan_ppid">Kelengkapan PPID</a></li>
            <li class="text-capital"><a href="/standard_ppid">Standar Pelayanan</a></li>
            <li class="text-capital"><a href="/layanan_ppid">Layanan Pusat Informasi</a></li>
            <li class="text-capital"><a href="/peraturan_ppid">Rancangan Peraturan</a></li>
            <li class="text-capital"><a href="/pos_ppid">Pos Pelayanan Informasi Publik</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection