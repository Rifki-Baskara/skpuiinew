@extends('layouts.LySKPNonProdi')

@section('content')

    <!--  Breadcrumb  -->
	<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">
                            <li><a href="/superadmin"><i class="menu-icon fa fa-home"></i> </a></li>
                            <li><a href="/superadmin/masterA">Master Aktivitas</a></li>
                            <li class="active">Ubah</li>
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
                        <h4 class="box-title">Ubah Data SKP Wajib</h4>
                        <hr color="yellow">

                        <form action="/nonprodi/master/update/{{$skpwajib->id}}" method="POST">
							@csrf
							<div class="form-group">
                                <label for="nama_aktivitas" class="form-control-label">Nama Aktivitas</label>
                                <input type="text" id="nama_aktivitas" value="{{$skpwajib->nama_aktivitas}}" placeholder="" class="form-control @error('nama_aktivitas') is-invalid @enderror" name="nama_aktivitas">
                                @error('nama_aktivitas')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
							</div>
							<div class="form-group">
                                <label for="nama_kegiatan" class="form-control-label">Nama Kegiatan</label>
                                <input type="text" id="nama_kegiatan" value="{{$skpwajib->nama_kegiatan}}" placeholder="" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan">
                                @error('nama_kegiatan')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bahan_kajian" class="form-control-label">Bahan Kajian</label>
                                <input type="text" id="bahan_kajian" value="{{$skpwajib->bahan_kajian}}" placeholder="" class="form-control @error('bahan_kajian') is-invalid @enderror" name="bahan_kajian">
                                @error('bahan_kajian')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
							</div>
							<div class="form-group">
                                <label for="jenjang_pendidikan" class="form-control-label">Jenjang Pendidikan</label>
                                <select class="form-control @error('jenjang_pendidikan') is-invalid @enderror" name="jenjang_pendidikan">
                                    <option value="" disabled>- Pilih -</option>
                                    <option value="Diploma" @if($skpwajib->jenjang_pendidikan == 'Diploma') selected @endif>Diploma</option>
                                    <option value="Sarjana" @if($skpwajib->jenjang_pendidikan == 'Sarjana') selected @endif>Sarjana</option>
                                    <option value="Profesi" @if($skpwajib->jenjang_pendidikan == 'Profesi') selected @endif>Profesi</option>  
                                    <option value="Magister" @if($skpwajib->jenjang_pendidikan == 'Magister') selected @endif>Magister</option>
                                    <option value="Doktor" @if($skpwajib->jenjang_pendidikan == 'Doktor') selected @endif>Doktor</option>               
                                </select>
                                @error('jenjang_pendidikan')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
							</div>
							<div class="form-group">
                                <label for="poin_skp" class="form-control-label">Poin SKP</label>
                                <input type="number" id="poin_skp" value="{{$skpwajib->poin_skp}}" placeholder="" class="form-control @error('poin_skp') is-invalid @enderror" name="poin_skp">
                                @error('poin_skp')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Penyelenggara</label>
                                <input type="text" id="penyelenggara" value="{{$skpwajib->penyelenggara}}" placeholder="" class="form-control @error('penyelenggara') is-invalid @enderror" name="penyelenggara">
                                @error('penyelenggara')
                                <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
							</div>
							<div>
								<a href="../" class="btn btn-secondary" >Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>

@endsection