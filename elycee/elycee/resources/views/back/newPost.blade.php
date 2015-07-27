@extends('back.master')

@section('title')
<title>Ajouter un article</title>
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">
<h1>Ajouter un article:</h1>
<hr>
  {!! Form::open(['url' => 'store','files' => true]) !!} 
    <div class="form-group">
      {!! Form::label('title', 'Titre de l\'article:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('abstract', 'Extrait de l\'article:') !!}
      {!! Form::text('abstract', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('content', 'Contenu de l\'article:') !!}
      {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('url_thumbnail', 'Image de l\'article:') !!}
      {!! Form::file('url_thumbnail', null)!!}
    </div>
    <div class="form-group">
      {!! Form::label('status', 'Statut de l\'article:') !!}
      {!! Form::select('status', [1 => 'publish', 2 => 'unpublish']) !!}
    </div>
    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
@stop