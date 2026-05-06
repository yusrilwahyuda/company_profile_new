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

* {
    font-family: 'Poppins', sans-serif;
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
    <h1>Standar Pelayanan Publik</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>
        Untuk memenuhi dan melayani permintaan dan kebutuhan dari pemohon, Pejabat Pengelola Informasi dan Dokumentasi melakukan layanan langsung dan layanan melalui media lainnya melalui telepon/fax. Telp; Email : info@jamkridantb.com atau ke website : http://jamkridantbsyariah.co.id
    </p>
    <p  style='text-align: justify'>
        Untuk memohon informasi atau menyampaikan pengaduan terkait pelayanan informasi, pemohon wajib menunjukkan bukti identitas :
        <ul>
            <li>1. Perorangan berupa identitas resmi (KTP/SIM/Paspor). Badan Hukum dan/atau Badan Publik berupa Akta Notaris dan Dokumen Pengesahan Badan Hukum dan/atau Badan Publik.</li>
            <li>2. Pemohon wajib mengisi formulir permohonan informasi, bisa didapat pada halaman http://jamkridantbsyariah.co.id atau dapat dikirimkan via pos ke alamat sekretariat sebagai berikut: Jamkrida NTB Jln. Catur Warga No.05, Mataram, Nusa Tenggara Barat</li>
        </ul>
    </p>
    <h1>Waktu Pelayanan</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>   
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin s/d Kamis</td>
                <td>09.00 - 15.00 Wita</td>
            </tr>
            <tr>
                <th>Istirahat</th>
                <td>12.00 - 13.30 Wita</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>09.00 - 15.00 Wita</td>
            </tr>
            <tr>
                <th>Sholat/Istirahat</th>
                <td>11.30 - 13.30 Wita</td>
            </tr>
        </tbody>
    </table>  
    <h1>Prosedur Pelayanan Informasi</h1>
    <hr>
    <ul>
        <li>1. Pemohon mengajukan permohonan permintaan informasi atau menyampaikan pengaduan dengan cara datang langsung, melalui telepon, faksimile, halaman http://jamkridantbsyariah.co.id dan surat resmi;</li>
        <li>2. Pemohon yang datang langsung dan melalui laman mengisi Formulir Permintaan Informasi atau Formulir Pengaduan</li>
    </ul>
    Khusus untuk pemohon melalui telepon, data diri dapat diisi oleh Petugas Pelayanan Informasi Publik ke dalam Formulir Permintaan Informasi atau Formulir Pengaduan.
    <ul>
        <li>1. Petugas memberikan tanda bukti permintaan informasi publik kepada pemohon.</li>
        <li>2. Tim Sekretariat menyampaikan informasi atau jawaban/tanggapan kepada pemohon.</li>
    </ul>
    <h1>Jangka Waktu Penyelesaian</h1>
    <hr>
    <p style='text-align : justify'>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, PPID akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada dibawah penguasaannya atau tidak dapat diperpanjang paling lambat 7 (tujuh) hari kerja sesuai dengan UU No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>
    <h1>Biaya</h1>
    <p style='text-align : justify'>PPID menyediakan informasi publik secara gratis (tidak dipungut biaya), namun bila terdapat kegiatan penggandaan informasi maka biaya yang timbul dibebankan kepada pemohon informasi.</p>
    <h1>Jaminan Pelayanan Keamanan</h1>
    <ul>
        <li>Informasi yang diberikan dijamin keabsahannya dan dapat dipertanggungjawabkan</li>
        <li>Petugas yang memberikan informasi telah mendapatkan penugasan dari atasan langsung</li>
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