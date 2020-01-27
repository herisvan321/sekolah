<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('sections.dashboard.homeadmin');
    }
    public function InpuDataPeriode(){
    	return view('sections.periode.input');
    }
    public function InpuDataSiswa(){
    	return view('sections.siswa.input');
    }
    public function ViewDataSiswa(){
    	return view('sections.siswa.view');
    }
    public function JabwalKP(){
    	return view('sections.kurikulumdanpenilaian.jadwal');
    }
    public function PresensiSiswa(){
    	return view('sections.kurikulumdanpenilaian.presensisiswa');
    }
    public function Ekstrakurikuler(){
    	return view('sections.kurikulumdanpenilaian.ekstrakurikuler');
    }
    public function PenilaianSiswa(){
    	return view('sections.kurikulumdanpenilaian.penilaiansiswa');
    }
    public function Kalender(){
    	return view('sections.kurikulumdanpenilaian.kalender');
    }
    public function Piket(){
    	return view('sections.kepegawaian.piket');
    }
    public function GuruKariyawan(){
    	return view('sections.kepegawaian.gurudankariyawan');
    }
    public function PenilaianPegawai(){
    	return view('sections.kepegawaian.penilaian');
    }
    public function GajiPegawai(){
    	return view('sections.kepegawaian.gaji');
    }
    public function InputDataAlumni(){
    	return view('sections.alumni.input');
    }
    public function ViewDataAlumni(){
    	return view('sections.alumni.view');
    }
    public function KategoryIn(){
    	return view('sections.inventarisasi.kategory');
    }
    public function InputDataIn(){
    	return view('sections.inventarisasi.input');
    }
    public function ViewDataIn(){
    	return view('sections.inventarisasi.view');
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
    public function ProfileSekolah(){
        return view('sections.profilesekolah.profile');
    }
    public function Pengumuman(){
        return view('sections.pengumuman.pengumuman');
    }
    public function Biodata(){
        return view('sections.biodata.biodata');
    }
    public function Setting(){
        return view('sections.setting.setting');
    }
    public function InputDataKelas(){
        return view('sections.kelas.input');
    }
    public function RombelKelas(){
        return view('sections.kelas.rombel');
    }
    public function AksiKelas(){
        return view('sections.kelas.aksi');
    }
    public function LaporanKelas(){
        return view('sections.kelas.laporan');
    }
    public function NilaiSiswa(){
        return view('sections.nilaisiswa.index');
    }
    public function LihatNilaiSiswa(){
        return view('sections.nilaisiswa.lihatnilaisiswa');
    }
    public function MataPelajaran(){
        return view('sections.matpel.index');
    }
    public function Pengajar(){
        return view('sections.pengajar.index');
    }
    public function Menu(){
        return view('include.menu');
    }
}
