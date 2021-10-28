@extends('app')

@section('content')
<h1 class="page-header text-center">Demandes provenant des sites</h1>
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
				<th>Nom dossier</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($demandes as $demande)
				 @foreach($dossiers as $dossier)
				 @if($dossier->id == $demande->id_dossier)
				 @if($demande->status != "DEMANDE SUPPRIMEE")
					<tr>
						
						<td>{{$dossier->name}}</td>
						<td>{{$demande->status}}</td>
						<td>
							<td><a href="annul_demande_s/{{$demande->id}}" data-toggle="modal" class="btn btn-primary"><i class='fa fa-edit'></i>Annuler</a> <a href="delete_demande_s/{{$dossier->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i>Supprimer</a>
							@include('action')
						</td>
					</tr>
					@endif
					@endif
				@endforeach
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection