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
                        <h4 class="box-title">Pengajuan SKP Pilihan </h4>
                        <hr color="yellow">
                        <!--  FORM  -->
                        <form action="{{ url ('/mahasiswa/laporan/store') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
                                <label for="nama_kegiatan" class="form-control-label">Nama Kegiatan</label>
                                <input type="text" id="nama_kegiatan" name="nama_kegiatan" placeholder="" class="form-control">
							</div>
							<div class="form-group">
                                <label for="domain_profil" class="form-control-label">Domain Profil Lulusan</label>
                                <select class="form-control" name="domain_profil">
                                <option value="" selected="selected">- Pilih -</option>
                                    @foreach ($domain as $domains)
                                    <option value="{{$domains->nama}}" => {{$domains->nama}}  </option>
                                    @endforeach
                                       
                                </select>
							</div>
							<div class="form-group">
                                <label for="aktivitas_kemahasiswaan" class="form-control-label">Aktivitas Kemahasiswaan</label>
                                <select class="form-control" name="aktivitas_kemahasiswaan">
                                    <option value="" selected="selected">- Pilih -</option>
                                    @foreach ($aktivitas as $aktiv)
                                    <option value="{{$aktiv->aktivitas_kemahasiswaan}}" => {{$aktiv->aktivitas_kemahasiswaan}}  </option>
                                    @endforeach
                                       
                                </select>
							</div>
							<div class="form-group">
                                <label for="lokasi" class="form-control-label">Lokasi Kegiatan</label>
                                <input type="text" id="lokasi" name="lokasi" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input type="text" id="penyelenggara" name="penyelenggara" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prestasi" class="form-control-label">Prestasi</label>
                                <input type="text" id="prestasi" name="prestasi" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="level_kegiatan" class="form-control-label">Level Kegiatan</label>
                                <select class="form-control" name="level_kegiatan">
                                    <option value="" selected="selected">- Pilih -</option>
                                    <option value="Universitas">Unversitas</option>  
                                    <option value="Nasional">Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_mulai" class="form-control-label">Waktu Pelaksanaan</label>
                                <input type="date" id="tanggal_mulai" placeholder="" name="tanggal_mulai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_selesai" class="form-control-label">Waktu Selesai</label>
                                <input type="date" id="tanggal_selesai" placeholder="" name="tanggal_selesai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-control-label">Deskipsi Kegiatan</label>
                                <textarea id="deskripsi" class="form-control" placeholder="" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="berkas_kegiatan" class="form-control-label">Unggah Berkas Kegiatan</label>
                                <div class="well well-none padding-bottom-5">
                                    <input type="file" name="berkas_kegiatan[]" multiple>
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