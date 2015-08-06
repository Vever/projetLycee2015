@extends('backStudent.master')
@section('headExtra')
	<style type="text/css">
		.row{
			text-align: center;
		}
		footer{
			position: fixed;
		}
		.col-md-12 img{
			width: 30%;
		}
	</style>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Votre score</h1>
			<h2>Vous avez eu <bold style="color:#ED382E;">{{$test}}</bold> bonnes réponses sur <bold style="color:#ED382E;">{{$reponse}}</bold> questions.</h2>
			<img src="http://media.giphy.com/media/xeXEpUVvAxCV2/giphy.gif" alt="epic win">
			<div>
				<a href="{{url('/home')}}">Retour à l'accueil.</a>
			</div>
		</div>
	</div>	
@endsection