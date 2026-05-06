<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //menu profil
    public function visi_misi()
    {
       return view('visi-misi');
    }

    public function latar_belakang(){
       return view('latarbelakang');
    }

    public function kepemilikan(){
       return view('kepemilikan');
    }

    public function struktur(){
       return view('struktur');
    }

    //menu produk
    public function penjaminankredit(){
       return view('penjaminankredit');
    }

    public function suretybond(){
       return view('suretybond');
    }

    public function bank_garansi(){
       return view('bank_garansi');
    }

    public function pembiayaan_syariah(){
       return view('pembiayaan_syariah');
    }

    // menu laporan
    public function annual_report(){
       return view('annual_report');
    }

    public function gcg(){
       return view('gcg');
    }

    public function klaim(){
       return view('klaim');
    }

    public function auditor(){
       return view('auditor');
    }

    public function renbis(){
       return view('renbis');
    }

    //menu ppid
    public function tentang_ppid(){
       return view('tentang_ppid');
    }

    public function kelengkapan_ppid(){
       return view('kelengkapan_ppid');
    }

    public function standard_ppid(){
       return view('standard_ppid');
    }

    public function layanan_ppid(){
       return view('layanan_ppid');
    }

    public function peraturan_ppid(){
       return view('peraturan_ppid');
    }

    public function pos_ppid(){
       return view('pos_ppid');
    }

    public function wbs(){
       return view('wbs');
    }

}