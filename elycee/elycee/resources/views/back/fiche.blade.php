@extends('back.master')

@section('content')
	<div class="col-xs-6 col-lg-4 col-md-offset-2 ">
		<h1>Fiche: <a href="#" title="{{$fiche->title}}">{{$fiche->title}}</a></h1>
		<table class="table">
			<tbody>
				<tr>
					<th>Question</th>
					<th>Reponse</th>
					<th></th>
					<th></th>
				</tr>
			@foreach ($questions as $question)
				<tr>
					<td>{{$question->content}}</td>
					<td>{{$question->reponse}}</td>
					<td class="warning"><a href="{{url('/editQuestion/'.$question->id)}}">Modifier</a></td>
					<td class="danger"><a href="{{url('singleQuestion/delete/'.$question->id)}}" >Supprimer</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<a href="{{url('newQuestion')}}">Ajouter une question.</a>
	</div><!--/.col-xs-6.col-lg-4-->
@endsection