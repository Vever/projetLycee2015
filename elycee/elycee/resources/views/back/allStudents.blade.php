@extends('back.master')

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">

		<h3>Eleves</h3>	
		<!-- <a href="{{url('/newPost')}}" class="btn btn-default">Ajouter</a> -->

		<table class="table">
			<tbody>
				<tr>
					<th>Nom</th>
					<th>Rôle</th>
					<th></th>
					<th></th>
				</tr>
				@foreach ($users as $user)
					<tr>
						<td><a href="{{url('single/'.$user->id)}}">{{$user->name}}</a></td>
						<td>{{$user->role}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div><!--/.col-xs-6.col-lg-4-->
@endsection