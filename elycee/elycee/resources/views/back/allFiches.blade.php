@extends('back.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">

		<h3>Fiches</h3>	
		<a href="{{url('/newFiche')}}" class="btn btn-default">Ajouter</a>

		<table class="table">
			<tbody>
				<tr>
					<th>Nom</th>
					<th>Niveau</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
				@foreach ($fiches as $fiche)
					<tr>
						<td><a href="{{url('fiche/'.$fiche->id)}}">{{$fiche->title}}</a></td>
						<td>{{$fiche->class_level}}</td>
						<td>
							@if ($fiche->status == "publish")
								<div class="publish"></div>
							@else
								<div class="unpublish"></div>
							@endif
						</td>
						<td class="warning"><a href="{{url('/editFiche/'.$fiche->id)}}">Modifier</a></td>
						<td class="danger"><a href="{{url('singleFiche/delete/'.$fiche->id)}}" >Supprimer</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div><!--/.col-xs-6.col-lg-4-->
@endsection