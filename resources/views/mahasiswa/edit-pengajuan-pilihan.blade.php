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
                        <h4 class="box-title">Edit Pengajuan SKP Pilihan </h4>
                        <hr color="yellow">
                        <!--  FORM  -->
                        <form action="{{ url ('/mahasiswa/laporan/update',$pengajuanPilihan->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="komentar" class="form-control-label">Komentar</label>
                                <textarea id="komentar" class="form-control" placeholder="" name="komentar">{{$pengajuanPilihan->komentar}}</textarea>
                            </div>
							<div class="form-group">
                                <label for="nama_kegiatan" class="form-control-label">Nama Kegiatan</label>
                                <input type="text" value="{{$pengajuanPilihan->nama_kegiatan}}" id="nama_kegiatan" name="nama_kegiatan" placeholder="" class="form-control">
							</div>
							<div class="form-group">
                                <label for="domain_profil" class="form-control-label">Domain Profil Lulusan</label>
                                <select class="form-control @error('domain_profil') is-invalid @enderror" name="domain_profil">
                                    <option value="" disabled>- Pilih -</option>
                                    <option value="{{$pengajuanPilihan->domain_profil}}">{{$pengajuanPilihan->domain_profil}}</option>
                                    @foreach($domain as $domains)
                                        <option value="{{$domains->nama}}" @if($domains->nama == $pengajuanPilihan->domain_profil) hidden @endif>{{$domains->nama}}</option>
                                    @endforeach         
                                </select>
							</div>
							<div class="form-group">
                                <label for="aktivitas_kemahasiswaan" class="form-control-label">Aktivitas Kemahasiswaan</label>
                                <select class="form-control @error('aktivitas_kemahasiswaan') is-invalid @enderror" name="aktivitas_kemahasiswaan">
                                    <option value="" disabled>- Pilih -</option>
                                    <option value="{{$pengajuanPilihan->aktivitas_kemahasiswaan}}">{{$pengajuanPilihan->aktivitas_kemahasiswaan}}</option>
                                    @foreach($aktivitas as $aktiv)
                                        <option value="{{$aktiv->aktivitas_kemahasiswaan}}" @if($aktiv->aktivitas_kemahasiswaan == $pengajuanPilihan->aktivitas_kemahasiswaan) hidden @endif>{{$aktiv->aktivitas_kemahasiswaan}}</option>
                                    @endforeach         
                                </select>
							</div>
							<div class="form-group">
                                <label for="lokasi" class="form-control-label">Lokasi Kegiatan</label>
                                <input type="text" value="{{$pengajuanPilihan->lokasi}}" id="lokasi" name="lokasi" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input type="text" value="{{$pengajuanPilihan->penyelenggara}}" id="penyelenggara" name="penyelenggara" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Prestasi</label>
                                <input type="text" value="{{$pengajuanPilihan->prestasi}}" id="prestasi" name="prestasi" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="level_kegiatan" class="form-control-label">Level Kegiatan</label>
                                <select class="form-control @error('level_kegiatan') is-invalid @enderror" name="level_kegiatan">
                                    <option value="" disabled>- Pilih -</option>
                                    <option value="Universitas" @if($pengajuanPilihan->level_kegiatan == 'Universitas') selected @endif>Unversitas</option>  
                                    <option value="Nasional"@if($pengajuanPilihan->level_kegiatan == 'Nasional') selected @endif>Nasional</option>
                                    <option value="Internasional"@if($pengajuanPilihan->level_kegiatan == 'Internasional') selected @endif>Internasional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_mulai" class="form-control-label">Waktu Pelaksanaan</label>
                                <input type="date" value="{{$pengajuanPilihan->tanggal_mulai}}" id="tanggal_mulai" placeholder="" name="tanggal_mulai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_selesai" class="form-control-label">Waktu Selesai</label>
                                <input type="date" value="{{$pengajuanPilihan->tanggal_selesai}}" id="tanggal_selesai" placeholder="" name="tanggal_selesai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-control-label">Deskipsi Kegiatan</label>
                                <textarea id="deskripsi" class="form-control" placeholder="" name="deskripsi">{{$pengajuanPilihan->deskripsi}}</textarea>
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
                                <button class="btn btn-success btn-lg mx-2" type="submit" >Update</button>
                            </div>
						</form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>

@endsection