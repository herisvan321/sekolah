<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
    	return view('sections.dashboard.homeguru');
    }
    public function Absensi(){
        return view('sections.absen.index');
    }
    public function LihatAbsensi(){
        return view('sections.absen.lihatabsensi');
    }
    public function Document(){
        return view('sections.document.index');
    }
    public function NilaiSiswa(){
        return view('sections.nilaisiswa.index');
    }
    public function LihatNilaiSiswa(){
        return view('sections.nilaisiswa.lihatnilaisiswa');
    }
    public function AksiKelas(){
        return view('sections.kelas.aksi');
    }
    public function HistoryPerpus(){
        return view('sections.perpustakaan.history');
    }
    public function BuatGroupLear(){
        return view('sections.elearning.buatgroup');
    }
    public function MasukGroupLear(){
        return view('sections.elearning.group');
    }
    public function PertemuanGroupLear(){
        return view('sections.elearning.pertemuan');
    }
    public function SoalGroupLear(){
        return view('sections.elearning.isisoal');
    }
    public function AbsensiLear(){
        return view('sections.elearning.absensi');
    }
    public function DetailAbsensiLear(){
        return view('sections.elearning.detailabsensi');
    }
    public function LaporanLear(){
        return view('sections.elearning.laporan');
    }
    public function DetailLaporanLear(){
        return view('sections.elearning.detaillaporan');
    }
    public function JawabanKuisLear(){
        return view('sections.elearning.jawaban');
    }
}
