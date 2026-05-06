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

li {
    text-align: left;
}

ol, ul {
    padding: 0;
    margin: 0;
    list-style: none;
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

.table {
    font-family: 'Poppins', sans-serif;
}

</style>

<div class="row">
    <div class="col-sm-8">  
        <div class="card mb-5">
            <div class="card-body">
    <h1>PENGADUAN</h1>
    <h1>PT. Jamkrida NTB Syariah</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>WBS PT. Jamkrida NTB Syariah adalah sarana untuk menyampaikan, mengelola dan<br> menindaklanjuti laporan mengenai dugaan terjadinya pelanggaran yang dilakukan oleh pihak internal PT. Jamkrida NTB Syariah.<br>
    Untuk anda yang ingin melaporkan indikasi pelanggaran oleh pegawai PT. Jamkrida NTB Syariah tetapi khawatir identitasnya terungkap, anda dapat menyampaikan melalui sarana:</p>
    
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>1</td>
                <td>Website</td>
                <td>jamkridantbsyariah.co.id</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Email</td>
                <td>admin@jamkridantbsyariah.co.id</td>
            </tr>
            <tr>
                <td>3</td>
                <td>QR KODE</td>
                <td><img src="/logo/wbs.png" alt="QR Code" width="200"></td>
            </tr>
        </tbody>
        
    </table>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <li class="text-capital"><a href="/wbs">Whiste-Blowing</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection