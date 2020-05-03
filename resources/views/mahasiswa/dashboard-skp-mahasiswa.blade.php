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
                            <li class="active">Dashboard</li>
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
						<h1 class="font-weight-bold">Selamat Datang Di UIISKP</h1>
						<p>Satuan Kredit Partisipasi</p>

						<!--  CARD WAJIB  -->
						<div class="card bg-light">
							<h5 class="card-header bg-primary text-white">Nilai SKP Wajib Anda</h5>
								<div class="card-body">
									<div class="table-responsive">
										<table>
											<tr>
												<th></th>
												<th></th>
											</tr>
											<tr>
												<td>Pendalaman Nilai Dasar Islam (PNDI)</td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pengembangan DIri Qurani (PDQ)</td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pelatihan Pengembangan Diri (PPD) </td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pelatihan Kepemimpinan dan Dakwah (PKD)</td>
												<td> : 4/20</td>
											</tr>
										</table>
									</div>
								</div>
						</div>

						<!--  CARD PILIHAN  -->
						<div class="card bg-light">
							<h5 class="card-header bg-primary text-white">Nilai SKP Pilihan Anda</h5>
								<div class="card-body">
									<div class="table-responsive">
										<table>
											<tr>
												<th></th>
												<th></th>
											</tr>
											<tr>
												<td>Pendalaman Nilai Dasar Islam (PNDI)</td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pengembangan DIri Qurani (PDQ)</td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pelatihan Pengembangan Diri (PPD) </td>
												<td> : 4/20</td>
											</tr>
											<tr>
												<td>Pelatihan Kepemimpinan dan Dakwah (PKD)</td>
												<td> : 4/20</td>
											</tr>
										</table>
									</div>
								</div>
						</div>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>
	</div>



@endsection