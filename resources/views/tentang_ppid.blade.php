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
    <h1>Tentang PPID</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>
    <h1>Visi dan Misi</h1>
    <hr>
    <h2>Visi</h2>
    Mengedepankan Fakta dan Realita dalam penyajian Informasi dan Dokumentasi<br>
    <h2>Misi</h2>
    <ul>
        <li>1. Meningkatkan Kualitas Pelayanan Informasi Publik.</li>
        <li>2. Berinovasi dalam pengembangan sistem pelayanan informasi publik.</li>
        <li>3. Meningkatkan sinergi dengan setiap stakeholder.</li>
    </ul>
    <h2>Seputar PPID PT. Jamkrida NTB Syariah</h2>
    <hr>
    Diberlakukannya Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik mendorong bangsa Indonesia untuk lebih maju , menjadi bangsa yang transparan dan akuntabel dalam mengelola sumber daya publik. Keterbukaan informasi merupakan landasan penting yang akan mendorong tercapainya budaya transparansi. Terlebih diera saat ini, keinginan masyarakat untuk memperoleh informasi semakin tinggi. Diberlakukannya UU Keterbukaan Informasi Publik merupakan perubahan yang mendasar dalam kehidupan bermasyarakat, berbangsa dan bernegara. Untuk memujudkan hal di atas, pada tanggal 01 Oktober 2021 Direksi PT. Jamkrida NTB Bersaing mengeluarkan Surat Keputusan Direksi Nomor : tentang Penetapan Pejabat Pengelola Informasi dan Dokumentasi (PPID) PT. Jamkrida NTB Syariah.
    </p>
    <h2>Maklumat PPID</h2>
    <hr>
    <ul>
        <li>1. Memberikan kemudahan mengakses informasi publik</li>
        <li>2. Memberikan informasi yang cepat, akurat dan berkualitas.</li>
        <li>3. Memberikan informasi publik berdasarkan fakta yang ada</li>
        <li>4. Menyediakan fasilitas pelayanan informasi publik yang nyaman</li>
        <li>5. Menjamin seluruh pelayanan terkait penyediaan informasi sesuai dengan ketentuan yang berlaku.</li>
        <li>6. Mengevaluasi dan melakukan perbaikan yang berkesinambungan</li>
    </ul>
    <h2>Struktur Organisasi PPID</h2>
    <hr>
    Terlampir struktur Organisasi PPID PT. Jamkrida NTB Syariah (PERSERODA) : <br>
    <a target="_BLANK" class="btn btn-success" href="https://drive.google.com/file/d/1M4b0SopCuvtNdZbw-37zR3Uv-aHtjU6t/view?usp=sharing"><b style="color: white">Download</b></a>
    <hr>
    <h2>Tugas Pejabat PPID</h2>
    <hr>
    <h3>Atasan Pejabat Pengelola Informasi dan Dokumentasi</h3>
    <ul>
        <li>1. Memutuskan dan mengevaluasi kebijakan pelayanan Informasi Publik</li>
        <li>2. Menyelesaikan masalah yang muncul terkait manajemen pengelolaan dan pelayanan informasi publik</li>
        <li>3. Mengevaluasi kinerja struktur pelayanan Informasi Publik</li>
        <li>4. Memastikan manajemen pengelolaan dan pelayanan Informasi Publik telah sesuai dengan peraturan perundangan yang berlaku</li>
    </ul>
    <h3>Koordinator Pejabat Pengelola Informasi dan Dokumentasi</h3>
    <ul>
        <li>1. Mengkoordinasikan seluruh kegiatan Pengelolaan Informasi Publik</li>
        <li>2. Melakukan pemantauan dan memberikan pelayanan terhadap permohonan</li>
        <li>3. Mengembangkan penyediaan dan pelayanan Informasi Publik</li>
        <li>4. Melaporkan semua kegiatan Informasi Publik kepada Atasan Pejabat Pengelola Informasi dan Dokumentasi</li>
    </ul>
    <h3>Bidang Pengelola Informasi dan Dokumentasi</h3>
    <ul>
        <li>1. Mengoordinasikan dan mengkonsolidasikan pengumpulan bahan informasi dan dokumentasi dari dari tiap divisi</li>
        <li>2. Menyimpan, mendokumentasikan, menyediakan dan memberi pelayanan informasi kepada publik</li>
        <li>3. Melakukan verifikasi bahan informasi publik</li>
        <li>4. Melakukan pemutakhiran informasi dan dokumentasi</li>
        <li>5. Membuat laporan pelayanan informasi</li>
    </ul>
    <h3>Bidang Pengaduan dan Pelayanan Sengketa</h3>
    <ul>
        <li>1. Memberikan pelayanan terhadap pemohon informasi</li>
        <li>2. Melakukan pemantauan dan memberikan pelayanan terhadap permohonan informasi baik melalui email, website dan media sosial lainnya</li>
        <li>3. Melakukan komunikasi, klalifikasi dan memberikan penjelasan terhadap pemohon informasi</li>
        <li>4. Membuat laporan pelayanan informasi</li>
    </ul>
    <h3>Pelaksana teknis dan Administrasi</h3>
    <ul>
        <li>1. Melakukan tugas-tugas administrasi terkait pelayanan Informasi Publik</li>
        <li>2. Membantu Bidang Pengelola Informasi dan Dokumentasi serta Bidang Pengaduan dan Pelayanan Sengketa</li>
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