@extends('back.master')
@section('title')
<title>Modifier un article</title>
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-offset-2 main">
<h1>Modifier un article:</h1>
<hr>
{!! Form::open(['url' => 'update/'.$post->id, 'method'=>'PUT','files' => true]) !!} 
  <div class="form-group">
      {!! Form::label('title', 'Titre de l\'article:') !!}
      {!! Form::text('title', $post->title, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('abstract', 'Extrait de l\'article:') !!}
      {!! Form::text('abstract', $post->abstract, null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('content', 'Contenu de l\'article:') !!}
      {!! Form::text('content', $post->content, null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('url_thumbnail', 'Image de l\'article:') !!}
      {!! Form::file('url_thumbnail', null)!!}
    </div>
    <div class="form-group">
      {!! Form::label('status', 'Statut de l\'article:') !!}
      {!! Form::select('status', [1 => 'publish', 2 => 'unpublish'], 'required') !!}
    </div>
    {!! Form::submit('enregistrer les modifications', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
@stop