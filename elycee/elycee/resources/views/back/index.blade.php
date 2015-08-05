@extends('back.master')

@section('title')
<title>Back Office - Home</title>
@endsection

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-2 main">
		<div id="gestionFiches" class="gestions_dashboard">
			<h4>Gestions des fiches<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h4>
			<ul>Les dernieres fiches:
				@foreach ($fiches as $fiche)
				<li><a href="{{url('fiche/'.$fiche->id)}}" title="{{$fiche->title}}" style="font-size:80%;">{{$fiche->title}}</a>
				@if ($fiche->status == "publish")
					<div class="publish"></div>
				@else
					<div class="unpublish"></div>
				@endif
				</li>
				@endforeach
			</ul>
		</div>	

		<div id="gestionArticles" class="gestions_dashboard" >
			<h4>Gestions des articles<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h4>
			<ul>Les derniers articles:
				@foreach ($posts as $post)
				<li>
					<a href="{{url('single/'.$post->id)}}" title="{{$post->title}}" style="font-size:80%;">{{$post->title}}</a>
					@if ($post->status == "publish")
						<div class="publish"></div>
					@else
						<div class="unpublish"></div>
					@endif
				</li><!--/.col-xs-6.col-lg-4-->
				@endforeach
				<a href="{{url('posts')}}">Voir tous les articles.</a>
			</ul>
		</div>

		<div id="gestionEleves" class="gestions_dashboard">
			<h4>Gestions des élèves<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></h4>
			<ul>Les derniers élèves inscrit:
				@foreach ($users as $user)
					@if($user->role != 'teacher')
					<li>
						<a href="{{url('single/'.$user->id)}}" title="{{$user->title}}" style="font-size:80%;">{{$user->name}}</a>
						<p>{{$user->role}}</p>
					</li>
					@endif
				@endforeach
			</ul>
		</div>
	</div>
@endsection

@section('sidebar')
	<div class="col-sm-9 col-md-5 col-md-offset-7" id="sidebarRight">
		<h4>Statistiques</h4>
		<ul>
			<li>43 commentaires</li>
			<li>30 fiches publiées</li>
			<li>150 élèves</li>
		</ul>
	</div>
@endsection