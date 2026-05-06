@extends('layouts.layout')

@section('content')
<style>
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

* {
    font-family: 'Poppins', sans-serif;
}

</style>

<div class="row">
    <div class="col-sm-8">  
        <div class="card mb-5">
            <div class="card-body">
    <h1>Rencana Bisnis</h1><h1> PT. Jamkrida NTB Syariah</h1>
    <hr class="animated-hr">
    <br>
    <p style='text-align: justify'>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>  
            <th scope='col'>Tahun</th>                             
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>1</td>
                <td>Rencana Bisnis Tahun 2021</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1Ahy54w4k8x0bnk8eCqfuKhq42AW8hNHr/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rencana Bisnis Tahun 2022</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1GM_nO1Lvcur3afAIdkFpLyf7WjNPDTP8/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rencana Bisnis Tahun 2023</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1aVuM686cBCacWVAN0BpyDHOVoQlUvBpS/view?usp=drive_link" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
             <tr>
                <td>4</td>
                <td>Rencana Bisnis Tahun 2024</td>
                <td><a target="_BLANK" href="https://drive.google.com/file/d/1An0mS9vWTbm719cIGm1Xl0HUDN0lMt_m/view" class="btn btn-success"><b style="color: #ffffff">Download</b></a></td>
            </tr>
        </tbody>
        
    </table>  
    </p>
    </div></div></div>
    <div class="col-sm-4">
        <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="active"><a href="javascript:void(0)">Link Terkait</a></li>
            <li class="text-capital"><a href="/annual_report">Annual Report</a></li>
            <li class="text-capital"><a href="/gcg">GCG</a></li>
            <!-- <li class="text-capital"><a href="/klaim">Klaim</a></li> -->
            <li class="text-capital"><a href="/auditor">Auditor</a></li>
            <li class="text-capital"><a href="/renbis">Rencana Bisnis</a></li>
        </ul>
        </aside>
    </div>
</div>

@endsection