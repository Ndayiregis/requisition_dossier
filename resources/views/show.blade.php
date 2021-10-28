@extends('app')

@section('content')
<h1 class="page-header text-center">Dossiers</h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<!-- <h2>
			<button type="button" data-target="#addnew" data-toggle="modal" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Dossier</button>
		</h2> -->
		<a href="{{ URL::previous() }}">Retour</a>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>Nom dossier</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($dossiers as $dossier)
					<tr>
						<td>{{$dossier->name}}</td>
						<td><a href="demande/{{$dossier->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i>Faire une demande</a>
							@include('action')
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection