@extends('layouts.LySKPProdiNew')

@section('content')

    <!--  Breadcrumb  -->
	<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-left">
                            <li><a href="/prodi"><i class="menu-icon fa fa-home"></i> </a></li>
                            <li class="active">Rekapitulasi SKP</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
		<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fullwidth">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab" role="tabpanel">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-justified " role="tablist">
                                            <li role="presentation" class="nav-item active">
                                                <a class="nav-link active" href="#skpWajib" role="tab" data-toggle="tab">Rekapitulasi Aktivitas SKP</a>
                                            </li>
                                            <li role="presentation" class="nav-item">
                                                <a class="nav-link" href="#skpPilihan" role="tab" data-toggle="tab">Rekapitulasi Mahasiswa SKP</a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane fade show active" id="skpWajib">
                                                <!-- TABEL SKP Wajib -->
                                                <div class="table-responsive">
                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Aktivitas</th>
                                                                <th>Nama Kegiatan</th>
                                                                <th>Poin SKP</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Bakso</td>
                                                                <td>12.000</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Mie Goreng</td>
                                                                <td>7.000</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Nasi Goreng</td>
                                                                <td>15.000</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Sate Padang</td>
                                                                <td>17.000</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Nasi Soto</td>
                                                                <td>20.000</td>
                                                                <td>1</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="skpPilihan">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label">Fakultas</label>
                                                            <input id="cc-exp" name="cc-exp" type="tel" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label">Program Studi</label>
                                                            <input id="cc-exp" name="cc-exp" type="tel" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a class="btn btn-primary" href="#" role="button">Reset</a>
                                                        <br>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <a class="btn btn-primary" href="/prodi/peserta/create" role="button">Tambah Kegiatan</a>
                                                    </div>
                                                </div>
                                                <hr>

                                                <!-- TABEL SKP Pilihan -->
                                                <div class="table-responsive">
                                                    <table id="bootstrap-data-table2" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Kegiatan</th>
                                                                <th>Waktu Pelaksanaan</th>
                                                                <th>Status</th>
                                                                <th>Poin SKP</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Pelatihan</td>
                                                                <td>12-02-2019</td>
                                                                <td>Terverifikasi</td>
                                                                <td>5</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Pelatihan</td>
                                                                <td>12-02-2019</td>
                                                                <td>Terverifikasi</td>
                                                                <td>5</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Pelatihan</td>
                                                                <td>12-02-2019</td>
                                                                <td>Terverifikasi</td>
                                                                <td>5</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Pelatihan</td>
                                                                <td>12-02-2019</td>
                                                                <td>Terverifikasi</td>
                                                                <td>5</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Pelatihan</td>
                                                                <td>12-02-2019</td>
                                                                <td>Terverifikasi</td>
                                                                <td>5</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
    </div>

@endsection