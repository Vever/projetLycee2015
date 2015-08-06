@extends('back.master')

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">

		<h3>Articles</h3>	
		<a href="{{url('/newPost')}}" class="btn btn-default">Ajouter</a>

		<table class="table">
			<tbody>
				<tr>
					<th>Titre</th>
					<th>Auteur</th>
					<th>Commentaires</th>
					<th>Statut</th>
					<th></th>
					<th></th>
				</tr>
				@foreach ($posts as $post)
					<tr>
						<td><a href="{{url('single/'.$post->id)}}">{{$post->title}}</a></td>
						<td>{{$post->user_id}}</td>
						<td>0</td>
						<td>
							@if ($post->status == "publish")
								<div class="publish"></div>
							@else
								<div class="unpublish"></div>
							@endif
						</td>
						<td class="warning"><a href="{{url('/editPost/'.$post->id)}}">Modifier</a></td>
						<td class="danger"><a href="{{url('single/delete/'.$post->id)}}" >Supprimer</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div><!--/.col-xs-6.col-lg-4-->
@endsection