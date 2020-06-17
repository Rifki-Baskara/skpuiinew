@extends('layouts.LySKPProdi')

@section('content')

    <!--  Breadcrumb  -->
	<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">
                            <li><a href="/prodi"><i class="menu-icon fa fa-home"></i> </a></li>
                            <li><a href="/prodi/peserta">Peserta Kegiatan SKP</a></li>
                            <li class="active">Tambah</li>
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
                        <h4 class="box-title">Tambah Kegiatan SKP </h4>
                        <hr color="yellow">

                        <form action="/adminskpwajib/infoskpwajib/store" method="POST">
                            @csrf
                            <!--  Aktivitas Kemahasiswaan & Domain Profil  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="aktivitas_kemahasiswaan" class="form-control-label">Aktivitas Kemahasiswaan</label>
                                        <input type="text" id="aktivitas_kemahasiswaan" value="{{ old ('aktivitas_kemahasiswaan')}}" placeholder="" class="form-control @error('aktivitas_kemahasiswaan') is-invalid @enderror" name="aktivitas_kemahasiswaan">
                                        @error('aktivitas_kemahasiswaan')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="domain_profil" class="form-control-label">Domain Profil Lulusan</label>
                                        <input type="text" id="domain_profil" value="{{ old ('domain_profil')}}" placeholder="" class="form-control @error('domain_profil') is-invalid @enderror" name="domain_profil">
                                        @error('domain_profil')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Nama Kegiatan & Penyelenggara  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_kegiatan" class="form-control-label">Nama Kegiatan</label>
                                        <input type="text" id="nama_kegiatan" value="{{ old ('nama_kegiatan')}}" placeholder="" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan">
                                        @error('nama_kegiatan')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="penyelenggara" class="form-control-label">Penyelenggara Kegiatan</label>
                                        <input type="text" id="penyelenggara" value="{{ old ('penyelenggara')}}" placeholder="" class="form-control @error('penyelenggara') is-invalid @enderror" name="penyelenggara">
                                        @error('penyelenggara')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Jenjang Pendidikan & Bobot SKP  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenjang_pendidikan" class="form-control-label">Jenjang Pendidikan</label>
                                        <input type="text" id="jenjang_pendidikan" value="{{ old ('jenjang_pendidikan')}}" placeholder="" class="form-control @error('jenjang_pendidikan') is-invalid @enderror" name="jenjang_pendidikan">
                                        @error('jenjang_pendidikan')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="bobot_skp" class="form-control-label">Bobot SKP</label>
                                        <input type="text" id="bobot_skp" value="{{ old ('bobot_skp')}}" placeholder="" class="form-control @error('bobot_skp') is-invalid @enderror" name="bobot_skp">
                                        @error('bobot_skp')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Negara & Tempat  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="negara" class="form-control-label">Negara Tempat Kegiatan Dilaksanakan</label>
                                        <input type="text" id="negara" value="{{ old ('negara')}}" placeholder="" class="form-control @error('negara') is-invalid @enderror" name="negara">
                                        @error('negara')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="lokasi" class="form-control-label">Kota dan Tempat Dilaksanakan</label>
                                        <input type="text" id="lokasi" value="{{ old ('lokasi')}}" placeholder="" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi">
                                        @error('lokasi')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Waktu  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="waktu_pelaksanaan" class="form-control-label">Waktu Pelaksanaan</label>
                                        <input type="date" id="waktu_pelaksanaan" value="{{ old ('waktu_pelaksanaan')}}" placeholder="" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" name="waktu_pelaksanaan">
                                        @error('waktu_pelaksanaan')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="waktu_selesai" class="form-control-label">Waktu Selesai</label>
                                        <input type="date" id="waktu_selesai" value="{{ old ('waktu_selesai')}}" placeholder="" class="form-control @error('waktu_selesai') is-invalid @enderror" name="waktu_selesai">
                                        @error('waktu_selesai')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  SKPI  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kelayakan_skpi" class="form-control-label">Apakah Kegiatan Ini Layak Masuk SKPI</label>
                                        <input type="text" id="kelayakan_skpi" value="{{ old ('kelayakan_skpi')}}" placeholder="" class="form-control @error('kelayakan_skpi') is-invalid @enderror" name="kelayakan_skpi">
                                        @error('kelayakan_skpi')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kategori_skpi" class="form-control-label">Kategori SKPI</label>
                                        <input type="text" id="kategori_skpi" value="{{ old ('kategori_skpi')}}" placeholder="" class="form-control @error('kategori_skpi') is-invalid @enderror" name="kategori_skpi">
                                        @error('kategori_skpi')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Periode & Jenis SKP  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="periode" class="form-control-label">Periode</label>
                                        <input type="text" id="periode" value="{{ old ('periode')}}" placeholder="" class="form-control @error('periode') is-invalid @enderror" name="periode">
                                        @error('periode')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenis_skp" class="form-control-label">Jenis SKP</label>
                                        <input type="text" id="jenis_skp" value="{{ old ('jenis_skp')}}" placeholder="" class="form-control @error('jenis_skp') is-invalid @enderror" name="jenis_skp">
                                        @error('jenis_skp')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Bukti & Link  -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="negara" class="form-control-label">Bukti Kegiatan</label>
                                        <div class="well well-none padding-bottom-5">
                                            <input type="file" name="file[ ]">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="link_url" class="form-control-label">Link Url</label>
                                        <input type="text" id="link_url" value="{{ old ('link_url')}}" placeholder="" class="form-control @error('link_url') is-invalid @enderror" name="link_url">
                                        @error('link_url')
                                        <div class="invalid-feedback"> {{$message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!--  Deskripsi  -->
                            <div class="form-group">
                                <label for="deskripsi" class="form-control-label">Deskipsi Kegiatan</label>
                                <textarea id="deskripsi" class="form-control" placeholder=""></textarea>
                            </div>

                            <hr color="yellow">
							<div>
								<a href="./" class="btn btn-secondary" >Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>

@endsection