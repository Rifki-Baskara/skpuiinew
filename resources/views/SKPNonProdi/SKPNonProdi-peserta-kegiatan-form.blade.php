@extends('layouts.LySKPNonProdi')

@section('content')

	<!--  Breadcrumb  -->
	<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">
                            <li><a href="/nonprodi"><i class="menu-icon fa fa-home"></i> </a></li>
                            <li><a href="/nonprodi/peserta">Peserta Kegiatan SKP</a></li>
                            <li><a href="./">Daftar mahasiswa {{ $skpwajib->nama_kegiatan}} </a></li>
                            <li class="active">Tambah Mahasiswa</li>
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
                        <h4 class="box-title">Tambah Data Mahasiswa </h4>
                        <hr color="yellow">
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
                            </div>
                        @endif

                        @if (session('status'))
							<div class="alert alert-success alert-dismissible fade show">
								{{ session('status') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
                        @endif
                        <div class="table-responsive">
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>Aktivitas Kemahasiswaan</td>
                                    <td> : {{ $skpwajib->nama_aktivitas}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Kegiatan</td>
                                    <td> : {{ $skpwajib->nama_kegiatan}}</td>
                                </tr>
                                <tr>
                                    <td>Jenjang Pendidikan</td>
                                    <td> : {{ $skpwajib->jenjang_pendidikan}}</td>
                                </tr>
                                <tr>
                                    <td>Poin SKP </td>
                                    <td> : {{ $skpwajib->poin_skp}}</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <form action="/nonprodi/peserta/show/{skpwajib}/store" method="POST" id="formInput">
                        @csrf
                            <input type="hidden" name="jenjang_pendidikan" value="{{ $skpwajib->jenjang_pendidikan}}" readonly>
                            <input type="hidden" name="aktivitas_kemahasiswaan" value="{{ $skpwajib->nama_aktivitas}}" readonly>
                            <input type="hidden" name="skp_wajib_nama_kegiatan" value="{{ $skpwajib->nama_kegiatan}}" readonly>
                            <input type="hidden" name="poin_skp" value="{{ $skpwajib->poin_skp}}" readonly>
                            <input type="hidden" name="data" id="data">
                            <div id="spreadsheet"></div>
                            <div class="ui divider hidden"></div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>
@endsection


@push('script')

    // step 2: include aset-aset jExcel
    <script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.css" type="text/css"/>
    <script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jsuites/v2/jsuites.css" type="text/css"/>

    <script>
        $(function () {
            $('#formInput').submit(function (event) {
                var data = $('#spreadsheet').jexcel('getData');
                $('#data').val(JSON.stringify(data));
            });
        });
    
        $('#spreadsheet').jexcel({
            data: [
                ['', '']
            ],
            
            columns: [
                {type: 'text', title: 'Nama', width: 500},
                {type: 'numeric', title: 'NIM', width: 300},
                
            ],
        
        });
        $('#spreadsheet').jexcel('insertRow', 1, 0);
    </script>
@endpush