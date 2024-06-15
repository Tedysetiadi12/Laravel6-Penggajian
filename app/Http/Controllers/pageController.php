<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jabatan;
use App\pegawai;
use App\penggajian;

class pageController extends Controller
{
    public function pegawai(){
        $jabatan = jabatan::all();
        $pegawai = Pegawai::with('jabatan')->get();
        return view('tambahpegawai',['jabatan' => $jabatan, 'pegawai' => $pegawai]);
    }
    public function jabatan(){

        $data = jabatan::all();
        return view('tambahjabatan',['data' => $data]);
    }

    public function penggajian(){
        
        $data = pegawai::all();
        $penggajians = Penggajian::with(['pegawai', 'jabatan'])->get();
        return view('penggajian',['data' => $data, 'penggajians' => $penggajians]);
    }
    public function tamu(){
        return view('pengunjung');
    }
    public function cari(Request $request)
    {
        $keyword = $request->input('keyword');

        if(empty($keyword)){
            return view('pengunjung');
        }
        $pegawai = Pegawai::where('nama', 'like', '%' . $keyword . '%')->get();
        return view('pengunjung', ['pegawai' => $pegawai]);
    }
    
}
