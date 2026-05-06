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
    <h1>Peraturan Perundang-Undangan Tentang Keterbukaan Informasi Publik</h1>
    <hr class="animated-hr">
    <br>
    Berikut undang-undang tentang keterbukaan informasi publik.
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Deskripsi</th>   
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Undang-undang Republik Indonesia nomor 14 tahun 2008 tentang keterbukaan informasi publik</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peraturan pemerintah republik indonesia nomor 61 tahun 2010 tentang pelaksanaan undang-undang nomor 14 tahun 2008 tentang keterbukaan informasi publik</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Peraturan komisi informasi nomor 1 tahun 2010 tentang standar layanan informasi publik</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Peraturan Daerah Provinsi Nusa Tenggara Barat Nomor 10 tahun 2015 Tentang pelayanan informasi publik di lingkungan Pemerintahan Daerah</td>
            </tr>
        </tbody>
    </table>  
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