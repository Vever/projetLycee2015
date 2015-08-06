@extends('back.master')

@section('title')
<title>Ajouter une Fiche</title>
@endsection

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">
<h1>Ajouter une Fiche:</h1>
<hr>
  {!! Form::open(['url' => 'storeFiche']) !!} 
    <div class="form-group">
      {!! Form::label('title', 'Titre de la fiche:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
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
      {!! Form::label('status', 'Statut de la fiche:') !!}
      {!! Form::select('status', [1 => 'publish', 2 => 'unpublish']) !!}
    </div>
    {!! Form::submit('Ajouter des questions', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
@stop