<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpusController extends Controller
{
    public function index(){
    	return view('sections.dashboard.homeperpus');
    }
    public function BukuPerpus(){
        return view('sections.perpustakaan.buku');
    }
    public function PeminjamanPerpus(){
        return view('sections.perpustakaan.peminjaman');
    }
    public function PengembalianPerpus(){
        return view('sections.perpustakaan.pengembalian');
    }
    public function HistoryPerpus(){

        return view('sections.perpustakaan.history');
    }
}
