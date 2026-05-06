@extends('layouts.layout')

@section('content')
<style>

*{
    font-family : 'poppins';
}

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
    <h1>Penjaminan Bank Garansi</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>
    Adalah pemberian penjaminan atas terbitnya Bank Garansi yang dilakukan oleh Bank NTB kepada kontraktor untuk berbagai proyek pengadaan barang & jasa yang dibiayai APBD I NTB maupun APBD II Kabupaten / Kota.<br>

Prosedurnya dapat dilakukan dengan 2 (dua) pola, yaitu :<br>

1. Nasabah Bank NTB, dimana Bank NTB mengajukan permohonan Kontra Bank Garansi kepada Jamkrida.<br>

2. Nasabah jamkrida, dimana Jamkrida mengajukan permohonan penerbitan Bank Garansi kepada Bank NTB. Atas Bank Garansi ini kemudian dijamin oleh Jamkrida.
<h2>Jenis Penjaminan</h2>
<h3>1. Jaminan Penawaran</h3>
Jaminan untuk mengikuti penawaran (tender) suatu proyek. <br>
Dokumen sebagai syarat penerbitan jaminan adalah :
<ul>
    <li>- Pengumuman pelelangan proyek.</li>
    <li>- Surat Permohonan Penerbitan Jaminan (Format standard).</li>
    <li>- Perjanjian Mengganti Kerugian.</li>
    <li>- Company Profile / Akta Pendirian Perusahaan.</li>
</ul>
<h3>2. Jaminan Pelaksanaan</h3>
Jaminan pelaksanaan suatu proyek. <br>
Dokumen sebagai syarat penerbitan jaminan adalah :
<ul>
    <li>- Pengumuman pemenang tender / SPK / Kontrak.</li>
    <li>- Time Schedule.</li>
    <li>- Surat permintaan penerbitan jaminan pelaksanaan (format standard).</li>
    <li>- Perjanjian Mengganti Kerugian (Notaril bila diperlukan).</li>
    <li>- Company Profile / Akta Pendirian Perusahaan.</li>
    <li>- Collateral ( bila diperlukan )</li>
</ul>
<h3>3. Jaminan Uang Muka</h3>
Jaminan yang dipergunakanan untuk pencairan uang muka suatu proyek. <br>
Dokumen sebagai syarat penerbitan jaminan adalah :
<ul>
    <li>- SPK atau Kontrak.</li>
    <li>- Time Schedule.</li>
    <li>- Surat permintaan penerbitan jaminan pelaksanaan (format standard).</li>
    <li>- Perjanjian Mengganti Kerugian (Notaril bila diperlukan).</li>
    <li>- Company Profile / Akta Pendirian Perusahaan.</li>
    <li>- Collateral ( bila diperlukan )</li>
</ul>
<h3>4. Jaminan Pemeliharaan</h3>
Jaminan untuk pencairan “uang jaminan” masa pemeliharaan suatu proyek.<br>
Dokumen sebagai syarat penerbitan jaminan adalah :
<ul>
    <li>- SPK atau Kontrak.</li>
    <li>- Berita Acara Serah Terima Pertama Proyek.</li>
    <li>- Surat permintaan penerbitan jaminan pelaksanaan (format standard).</li>
    <li>- Perjanjian Mengganti Kerugian (Notaril bila diperlukan).</li>
    <li>- Company Profile / Akta Pendirian Perusahaan.</li>
    <li>- Collateral / Agunan ( bila diperlukan )</li>
</ul>
    </p>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <!-- <li class="text-capital"><a href="/penjaminankredit">Penjaminan Kredit</a></li> -->
            <li class="text-capital"><a href="/suretybond">Penjaminan SuretyBond</a></li>
            <li class="text-capital"><a href="/bankgaransi">Penjaminan Bank Garansi</a></li>
            <li class="text-capital"><a href="/pembiayaansyariah">Penjaminan Pembiayaan Syariah</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection