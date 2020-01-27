<li class="xn-title">Home Admin</li> 
 <li><a href="{{url('/homeadmin/')}}"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a></li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-file"></span> <span class="xn-text">Periode</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/input/data/periode')}}"><span class="fa fa-circle-o"></span> Input data</a></li>
    </ul>
</li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Siswa</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/input/data/siswa')}}"><span class="fa fa-circle-o"></span> Input data</a></li>
        <li><a href="{{url('/homeadmin/view/data/siswa')}}"><span class="fa fa-circle-o"></span> View data</a></li>
    </ul>
</li>
<!--  -->

<li><a href="{{url('/homeadmin/absensi')}}"><span class="fa fa-users"></span><span class="xn-text">Absen Permatpel</span></a></li>
<li><a href="{{url('/homeadmin/document')}}"><span class="fa fa-users"></span><span class="xn-text">Document</span></a></li>
<li><a href="{{url('/homeadmin/nilai/siswa')}}"><span class="fa fa-users"></span><span class="xn-text">Nilai Siswa</span></a></li>
<li><a href="{{url('/homeadmin/mata/pelajaran')}}"><span class="fa fa-users"></span><span class="xn-text">Mata Pelajaran</span></a></li>
<li><a href="{{url('/homeadmin/pengajar')}}"><span class="fa fa-users"></span><span class="xn-text">Pengajar</span></a></li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Bimbingan Koseling</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/bimbingan/koseling')}}"><span class="fa fa-circle-o"></span> Tambah Akun</a></li>
    </ul>
</li>
<!--  -->
 <li class="xn-openable">
    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Kelas</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/input/data/kelas')}}"><span class="fa fa-circle-o"></span> Input data</a></li>
        <li><a href="{{url('/homeadmin/rombel/kelas')}}"><span class="fa fa-circle-o"></span> Rombel Kelas</a></li>
        <li><a href="{{url('/homeadmin/aksi/kelas')}}"><span class="fa fa-circle-o"></span> Aksi Kelas</a></li>
        <li><a href="{{url('/homeadmin/laporan/kelas')}}"><span class="fa fa-circle-o"></span> Laporan </a></li>
    </ul>
</li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Kurikulum dan penilaian</span></a>
    <ul>                                    
        <li><a href="{{url('/homeadmin/jabwal/kurikulum/penilaian')}}"><span class="fa fa-circle-o"></span> Jadwal</a></li>
        <!-- <li><a href="{{url('/homeadmin/presensi/siswa/kurikulum/penilaian')}}"><span class="fa fa-circle-o"></span> Presensi Siswa</a></li> -->
        <li><a href="{{url('/homeadmin/ekstrakurikuler/kurikulum/siswa')}}"><span class="fa fa-circle-o"></span> Ekstrakurikuler</a></li>
        <!-- <li><a href="{{url('/homeadmin/penilaian/siswa/kurikulum/penilaian')}}"><span class="fa fa-circle-o"></span> Penilaian Siswa</a></li> -->
        <li><a href="{{url('/homeadmin/kalender/akademik/kurikulum/penilaian')}}"><span class="fa fa-circle-o"></span> Kalender Akademik</a></li>
    </ul>
</li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Kepegawaian</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/piket/kepegawaian')}}"><span class="fa fa-circle-o"></span> Piket</a></li>
        <li><a href="{{url('/homeadmin/guru/kariyawan/kepegawaian')}}"><span class="fa fa-circle-o"></span> Guru dan Kariyawan</a></li>
        <li><a href="{{url('/homeadmin/penilaian/kepegawaian')}}"><span class="fa fa-circle-o"></span> Penilaian</a></li>
        <li><a href="{{url('/homeadmin/gaji/kepegawaian')}}"><span class="fa fa-circle-o"></span> Gaji</a></li>
    </ul>
</li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Alumni</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/input/data/alumni')}}"><span class="fa fa-circle-o"></span> Input data</a></li>
        <li><a href="{{url('/homeadmin/view/data/alumni')}}"><span class="fa fa-circle-o"></span> View</a></li>
    </ul>
</li>
 <li class="xn-openable">
    <a href="#"><span class="fa fa-archive"></span> <span class="xn-text">Inventarisasi</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/kategory/inventarisasi')}}"><span class="fa fa-circle-o"></span> Kategory</a></li>
        <li><a href="{{url('/homeadmin/input/data/inventarisasi')}}"><span class="fa fa-circle-o"></span> Input data</a></li>
        <li><a href="{{url('/homeadmin/view/data/inventarisasi')}}"><span class="fa fa-circle-o"></span> View data</a></li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Perpustakaan</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/buku/perpustakaan')}}"><span class="fa fa-circle-o"></span> Buku</a></li>
        <li><a href="{{url('/homeadmin/peminjaman/perpustakaan')}}"><span class="fa fa-circle-o"></span> Peminjaman</a></li>
        <li><a href="{{url('/homeadmin/pengembalian/perpustakaan')}}"><span class="fa fa-circle-o"></span> Pengembalian</a></li>
        <li><a href="{{url('/homeadmin/history/perpustakaan')}}"><span class="fa fa-circle-o"></span> History</a></li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-file-o"></span> <span class="xn-text">E-learning</span></a>
    
    <ul>                                    
        <li><a href="{{url('/homeadmin/buat-group/e-learning')}}"><span class="fa fa-circle-o"></span> Buat Group</a></li>
        <li><a href="{{url('/homeadmin/absensi/e-learning')}}"><span class="fa fa-circle-o"></span> Absensi</a></li>
        <li><a href="{{url('/homeadmin/laporan/e-learning')}}"><span class="fa fa-circle-o"></span> Laporan</a></li>
    </ul>
</li>
<li><a href="{{url('/homeadmin/profile-sekolah')}}"><span class="fa fa-circle-o"></span><span class="xn-text">Profile Sekolah</span></a></li>
<li><a href="{{url('/homeadmin/pengumuman')}}"><span class="fa fa-bullhorn"></span><span class="xn-text">Pengumuman</span></a></li>
<li><a href="{{url('/homeadmin/biodata')}}"><span class="fa fa-user"></span><span class="xn-text">Biodata</span></a></li>
<li><a href="{{url('/homeadmin/setting')}}"><span class="fa fa-cog"></span><span class="xn-text">Setting</span></a></li>