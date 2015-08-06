@extends('backStudent.master')
@section('title')
<title>E lycée - Actualités</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-9 questionContent">
            <h1>{{$fiche->title}}</h1>
            {!! Form::open(['url' => 'scoreCalcul']) !!}
        	@foreach ($questions as $question)
            	<p class="enoncer">{{$question->content}}</p>
                {!! Form::label('title', 'Vrai') !!}
                {!! Form::radio($question->id, 'vrai') !!}
                {!! Form::label('title', 'Faux') !!}
                {!! Form::radio($question->id, 'faux') !!}
    		@endforeach
    		{!! Form::close() !!}
    		<input id="sub" type="button" class="btn" id="valider" value="Valider">
        </div>
        <div class="col-md-3">
            <a class="twitter-timeline" href="https://twitter.com/ecolemultimedia" data-widget-id="628169526123831296">Tweets de @ecolemultimedia</a>

        </div>
    </div>
</div>
@endsection

@section('scriptExtra')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sub').bind('click',function(){
				$('.questionContent form').submit();
			});
		});	
	</script>
@endsection