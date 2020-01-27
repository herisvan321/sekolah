<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
    	return view('sections.dashboard.homesuperadmin');
    }
    public function TambahSekolah(){
    	return view('sections.superadmin.sekolah.index');
    }
    public function LihatSekolah(){
        return view('sections.superadmin.sekolah.lihatsekolah');
    }
    public function TambahAdmin(){
    	return view('sections.superadmin.admin.index');
    }
    public function LihatAdmin(){
        return view('sections.superadmin.admin.lihatadmin');
    }
    public function Pengumuman(){
        return view('sections.superadmin.pengumuman.index');
    }
    public function Pesan(){
        return view('sections.superadmin.pesan.index');
    }
    public function Laporan(){
    	return view('sections.superadmin.laporan.index');
    }
    public function LihatLaporan(){
    	return view('sections.superadmin.laporan.LihatLaporan');
    }
}
