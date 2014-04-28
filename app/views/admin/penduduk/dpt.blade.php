@extends('_tema.admin')

@section('style')
{{ HTML::style('packages/cleanzone/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}
@stop

@section('konten')
	@include('_tema.nav')
	<div id="cl-wrapper">
		<div class="container-fluid">
			<div class="cl-mcont">
				<div class="row">
					<div class="col-md-12">
						@if(Session::has('pesan'))
						<div class="alert alert-success alert-white rounded">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<div class="icon"><i class="fa fa-check"></i></div>
							<strong>Perhatian!</strong> {{ Session::get('pesan') }}
						</div>
						@endif
						<div class="block-flat">
							@if ($penduduk->count())
							<div class="header">	
								<!-- <a href="{{ route('admin.penduduk.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Penduduk</a>						
								-->
								<h3>Daftar Pemilih Tetap</h3>
							</div>
							<div class="content">
								<div class="table-responsive">
									<table class="table table-bordered" id="datatable" >
										<thead>
											<tr>
												<th>KK</th>
												<th>KTP</th>
												<th>Nama</th>
												<th>TTL</th>
												<th>Jenis Kelamin</th>
												<th>Kelurahan</th>
												<th>Kecamatan</th>
												<th>TPS</th>
												<th>Sah Kel.</th>
												<th>Sah Kec.</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($penduduk as $penduduk)
												@if(($penduduk->sah_kelurahan === 1) && ($penduduk->sah_kecamatan === 1))
												
												<tr>
													<td>{{{ $penduduk->kk }}}</td>
													<td>{{{ $penduduk->ktp }}}</td>
													<td>{{{ $penduduk->nama }}}</td>
													<td>{{{ $penduduk->tempat_lahir }}}, {{{ date("d M Y", strtotime($penduduk->tanggal_lahir)) }}}</td>
													<td>{{{ ($penduduk->jenis_kelamin==0) ? 'Laki-laki' : 'Perempuan' }}}</td>
													<td>{{{ $penduduk->kelurahan->nama }}}</td>
													<td>{{{ $penduduk->kecamatan->nama }}}</td>
													<td>{{ HTML::link('admin/per-kelurahan/'.$penduduk->kelurahan->id.'/'.$penduduk->id_tps,$penduduk->tps->nomor_urut) }}</td>
													<td>{{ Form::checkbox('sah_kelurahan', $penduduk->sah_kelurahan, ($penduduk->sah_kelurahan === 1) ? 'checked' : '', array('disabled' => 'disabled')) }}</td>
													<td>{{ Form::checkbox('sah_kecamatan', $penduduk->sah_kecamatan, ($penduduk->sah_kecamatan === 1) ? 'checked' : '', array('disabled' => 'disabled')) }}</td>
													<td style="width:110px">
														{{ Form::open(array('method' => 'DELETE', 'route' => array('admin.penduduk.destroy', $penduduk->id))) }}
															<button type="submit" class="btn btn-danger btn-xs pull-right"><i class="fa fa-times"></i></button>
														{{ Form::close() }}
														<!--
														{{ link_to_route('admin.penduduk.edit', 'Edit', array($penduduk->id), array('class' => 'btn btn-info btn-xs pull-right')) }}
														-->
														{{ link_to_route('admin.penduduk.show', 'Detail', array($penduduk->id), array('class' => 'btn btn-info btn-xs pull-right')) }}
													</td>
												</tr>
												@else
												@endif
											@endforeach
										</tbody>
									</table>							
								</div>
								@else
									<h3 class="text-center"><i class="fa fa-eye-slash"></i> Anda belum memiliki data penduduk.</h3>
									<br/>
									<center>
										<a href="{{ route('admin.penduduk.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Baru</a>
									</center>
								@endif
							</div>
						</div>				
					</div>
				</div>
			</div>
		</div> 
	</div>
@stop

@section('script')
{{ HTML::script('packages/cleanzone/js/jquery.datatables/jquery.datatables.min.js') }}
{{ HTML::script('packages/cleanzone/js/jquery.datatables/bootstrap-adapter/js/datatables.js') }}
<script type="text/javascript">
$(document).ready(function(){//initialize the javascript
	App.init(); App.dataTables(); });
</script>
@stop