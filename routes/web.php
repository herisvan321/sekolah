<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.template');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('homeadmin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/input/data/periode', 'AdminController@InpuDataPeriode');
    Route::get('/input/data/siswa', 'AdminController@InpuDataSiswa');
    Route::get('/view/data/siswa', 'AdminController@ViewDataSiswa');
    Route::get('/jabwal/kurikulum/penilaian', 'AdminController@JabwalKP');
    Route::get('/presensi/siswa/kurikulum/penilaian', 'AdminController@PresensiSiswa');
    Route::get('/ekstrakurikuler/kurikulum/siswa', 'AdminController@Ekstrakurikuler');
    Route::get('/penilaian/siswa/kurikulum/penilaian', 'AdminController@PenilaianSiswa');
    Route::get('/kalender/akademik/kurikulum/penilaian', 'AdminController@Kalender');
    Route::get('/piket/kepegawaian', 'AdminController@Piket');
    Route::get('/guru/kariyawan/kepegawaian', 'AdminController@GuruKariyawan');
    Route::get('/penilaian/kepegawaian', 'AdminController@PenilaianPegawai');
    Route::get('/gaji/kepegawaian', 'AdminController@GajiPegawai');
    Route::get('/input/data/alumni', 'AdminController@InputDataAlumni');
    Route::get('/view/data/alumni', 'AdminController@ViewDataAlumni');
    Route::get('/kategory/inventarisasi', 'AdminController@KategoryIn');
    Route::get('/input/data/inventarisasi', 'AdminController@InputDataIn');
    Route::get('/view/data/inventarisasi', 'AdminController@ViewDataIn');
    Route::get('/buat-group/e-learning', 'AdminController@BuatGroupLear');
    Route::get('/masuk-group/e-learning', 'AdminController@MasukGroupLear');
    Route::get('/pertemuan-group/e-learning', 'AdminController@PertemuanGroupLear');
    Route::get('/soal-group/e-learning', 'AdminController@SoalGroupLear');
    Route::get('/absensi/e-learning', 'AdminController@AbsensiLear');
    Route::get('/detail-absensi-group/e-learning', 'AdminController@DetailAbsensiLear');
    Route::get('/laporan/e-learning', 'AdminController@LaporanLear');
    Route::get('/detail-laporan-group/e-learning', 'AdminController@DetailLaporanLear');
    Route::get('/jawaban-kuis/e-learning', 'AdminController@JawabanKuisLear');
    Route::get('/profile-sekolah', 'AdminController@ProfileSekolah');
    Route::get('/pengumuman', 'AdminController@Pengumuman');
    Route::get('/biodata', 'AdminController@Biodata');
    Route::get('/setting', 'AdminController@Setting');
    Route::get('/input/data/kelas', 'AdminController@InputDataKelas');
    Route::get('/rombel/kelas', 'AdminController@RombelKelas');
    Route::get('/aksi/kelas', 'AdminController@AksiKelas');
    Route::get('/laporan/kelas', 'AdminController@LaporanKelas');
    Route::get('/absensi', 'AdminController@Absensi');
    Route::get('/lihat/absensi', 'AdminController@LihatAbsensi');
    Route::get('/nilai/siswa', 'AdminController@NilaiSiswa');
    Route::get('/lihat/nilai/siswa', 'AdminController@LihatNilaiSiswa');
    Route::get('/mata/pelajaran', 'AdminController@MataPelajaran');
    Route::get('/pengajar', 'AdminController@Pengajar');
    Route::get('/menu', 'AdminController@Menu');
});

Route::prefix('homeguru')->group(function(){
    Route::get('/', 'GuruController@index');
    Route::get('/absensi', 'GuruController@Absensi');
    Route::get('/lihat/absensi', 'GuruController@LihatAbsensi');
    Route::get('/document', 'GuruController@Document');
    Route::get('/nilai/siswa', 'GuruController@NilaiSiswa');
    Route::get('/lihat/nilai/siswa', 'GuruController@LihatNilaiSiswa');
    Route::get('/aksi/kelas', 'GuruController@AksiKelas');
    Route::get('/buat-group/e-learning', 'GuruController@BuatGroupLear');
    Route::get('/masuk-group/e-learning', 'GuruController@MasukGroupLear');
    Route::get('/pertemuan-group/e-learning', 'GuruController@PertemuanGroupLear');
    Route::get('/soal-group/e-learning', 'GuruController@SoalGroupLear');
    Route::get('/absensi/e-learning', 'GuruController@AbsensiLear');
    Route::get('/detail-absensi-group/e-learning', 'GuruController@DetailAbsensiLear');
    Route::get('/laporan/e-learning', 'GuruController@LaporanLear');
    Route::get('/detail-laporan-group/e-learning', 'GuruController@DetailLaporanLear');
    Route::get('/jawaban-kuis/e-learning', 'GuruController@JawabanKuisLear');
    Route::get('/setting', 'GuruController@Setting');
});

Route::prefix('homebk')->group(function(){
    Route::get('/', 'BkController@index');
    Route::get('/bimbingan/koseling', 'BkController@BimKos');
    Route::get('/view/bimbingan/koseling', 'BkController@VBimKos');
    Route::get('/setting', 'BkController@Setting');
});
Route::prefix('/homeperpus')->group(function(){
    Route::get('/', 'PerpusController@index');
    Route::get('/buku/perpustakaan', 'PerpusController@BukuPerpus');
    Route::get('/peminjaman/perpustakaan', 'PerpusController@PeminjamanPerpus');
    Route::get('/pengembalian/perpustakaan', 'PerpusController@PengembalianPerpus');
    Route::get('/history/perpustakaan', 'PerpusController@HistoryPerpus');
    Route::get('/setting', 'PerpusController@Setting');
});
Route::prefix('homesuperadmin')->group(function(){
    Route::get('/', 'SuperAdminController@index');
    Route::get('/tambah/sekolah', 'SuperAdminController@TambahSekolah');
    Route::get('/lihat/sekolah', 'SuperAdminController@LihatSekolah');
    Route::get('/tambah/admin', 'SuperAdminController@TambahAdmin');
    Route::get('/lihat/admin', 'SuperAdminController@LihatAdmin');
    Route::get('/pengumuman', 'SuperAdminController@pengumuman');
    Route::get('/pesan', 'SuperAdminController@pesan');
    Route::get('/laporan', 'SuperAdminController@Laporan');
    Route::get('/lihat/laporan', 'SuperAdminController@LihatLaporan');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
