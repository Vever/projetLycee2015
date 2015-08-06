@extends('back.master')

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('title')
<title>Modifier une Fiche QCM</title>
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">
<h1>Modifier une Fiche QCM:</h1>
<hr>
{!! Form::open(['url' => 'updateFiche/'.$fiche->id, 'method'=>'PUT','files' => true]) !!} 
  	<div class="form-group">
		{!! Form::label('title', 'Titre de l\'article:') !!}
		{!! Form::text('title', $fiche->title, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
		{!! Form::label('class_level', 'Niveau de la class:') !!}
		{!! Form::select('class_level', [1 => 'first_class', 2 => 'final_class']) !!}
    </div>
    <div class="form-group" style="display:none;">
		{!! Form::label('user_id', 'User_id:') !!}
		{!! Form::text('user_id', $user->id)!!}
    </div>
    <div class="form-group">
		{!! Form::label('status', 'Statut de l\'article:') !!}
		{!! Form::select('status', [1 => 'publish', 2 => 'unpublish']) !!}
    </div>
    {!! Form::submit('enregistrer les modifications', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
@stop