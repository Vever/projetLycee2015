@extends('back.master')

@section('title')
<title>Modifier une question</title>
@endsection

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">
<h1>Modifier une question:</h1>
<hr>
  {!! Form::open(['url' => 'updateQuestion/'.$question->id, 'method'=>'PUT']) !!} 
    <div class="form-group">
      {!! Form::label('content', 'Question:') !!}
      {!! Form::text('content', $question->content, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('reponse', 'Reponse:') !!}
      {!! Form::select('reponse', [1 => 'vrai', 2 => 'faux']) !!}
    </div>
    <div class="form-group" style="display:none;">
      {!! Form::label('fiche_id', 'Fiche_id:') !!}
      {!! Form::text('fiche_id', $fiche_id->id)!!}
    </div>
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
@stop