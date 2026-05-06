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
    <h1>Pedoman Pengelolaan Pelayanan Informasi Publik</h1>
    <hr class="animated-hr">
    <br>
    Berikut Pedoman yang digunakan untuk pelayanan publik.
     <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Deskripsi</th>                               
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pengelolaan Permohonan Informasi</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1c5rUX7GOueJipmik5NVuSyDMxBBv-iRp/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pengelolaan Keberatan atas Informasi</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/15z73Dcu96WbmqoUyXOWSxfb0VTaBe5L9/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Penanganan Sengketa Informasi Publik</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/110yCo1ZS8xDx8F7iDUJtx4da5fx6zKVX/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Penetapan dan Pemuktahiran DIP</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1Yh8zU7E4sJ4ssnWYBUK7nDNRzODIaoGo/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pengujian Tentang Konsekuensi</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1xkK4bRpKf_NCFXvmi9K4-RYGs2Hd4sRY/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pendokumentasian Informasi Publik</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1r--FnBAFk24fKi17PrMkzY-JzqN9x6qO/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Pendokumentasian Informasi Yang Dikecualikan</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1MExMgnG6zWhAtcyXSq7cPyV_8E2fj3s9/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>8</td>
                <td>SK PPID dan Struktur Organisasi PPID</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1_DrA8DYM_Nomd-VZuKgKL7qk0kpGGLcV/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
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