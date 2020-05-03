@extends('layouts.LYmahasiswa')

@section('content')

    <!--  Breadcrumb  -->
	<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">
                            <li><a href="#"><i class="menu-icon fa fa-home"></i> </a></li>
                            <li><a href="/mahasiswa">Dashboard</a></li>
                            <li><a href="/mahasiswa/laporan">Laporan</a></li>
                            <li class="active">Pengajuan SKP Pilihan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
		<!--  SKP Wajib Mahsiswa  -->
		<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">SKP Wajib Mahasiswa </h4>
                        <hr color="yellow">
                        <!--  FORM  -->
						<form action="#" method="post">
							<div class="form-group">
                                <label for="nama_kegiatan" class="form-control-label">Nama Kegiatan</label>
                                <input type="text" id="nama_kegiatan" placeholder="" class="form-control">
							</div>
							<div class="form-group">
                                <label for="domain_profil" class="form-control-label">Domain Profil Lulusan</label>
                                <select class="form-control">
                                    <option value="" selected="selected">- Pilih -</option>
                                    <option value="Kepribadian Islami">Kepribadian Islami</option>
                                    <option value="Kepemimpinan Profetik">Kepemimpinan Profetik</option>
                                    <option value="Keterampilan Transformatif">Keterampilan Transformatif</option>  
                                    <option value="Pengatahuan Integratif">Pengetahuan Integratif</option>                
                                </select>
							</div>
							<div class="form-group">
                                <label for="aktivitas_kemahasiswaan" class="form-control-label">Aktivitas Kemahasiswaan</label>
                                <select class="form-control">
                                    <option value="" selected="selected">- Pilih -</option>
                                    <option value="Kepribadian Islami">Melaksanakan Tugas Sebagai Khotib</option>
                                    <option value="Kepemimpinan Profetik">Menjadi Mualim</option>
                                    <option value="Keterampilan Transformatif">Mengembangkan Bisnis/Startup</option>  
                                    <option value="Pengatahuan Integratif">Dakwah Melalui Tulisan</option>                
                                </select>
							</div>
							<div class="form-group">
                                <label for="lokasi" class="form-control-label">Lokasi Kegiatan</label>
                                <input type="text" id="lokasi" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input type="text" id="penyelenggara" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="level_kegiatan" class="form-control-label">Level Kegiatan</label>
                                <select class="form-control">
                                    <option value="" selected="selected">- Pilih -</option>
                                    <option value="Keterampilan Transformatif">Unversitas</option>  
                                    <option value="Kepribadian Islami">Nasional</option>
                                    <option value="Kepemimpinan Profetik">Internasional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="form-control-label">Tanggal Kegiatan</label>
                                <input type="date" id="tanggal" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-control-label">Deskipsi Kegiatan</label>
                                <textarea id="deskripsi" class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="berkas" class="form-control-label">Unggah Berkas Kegiatan</label>
                                <div class="well well-none padding-bottom-5">
                                    <input type="file" name="file[ ]">
                                </div>
                            </div>
                            <hr color="yellow">
                            <div class="form-button text-center ">
                                <a class="btn btn-secondary btn-lg mx-2" href="/mahasiswa/laporan" role="button">Kembali</a>
                                <button class="btn btn-success btn-lg mx-2" type="submit" >Simpan</button>
                            </div>
						</form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>

@endsection