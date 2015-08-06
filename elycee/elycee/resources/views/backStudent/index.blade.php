@extends('backStudent.master')

@section('headExtra')
	
@endsection

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="col-md-9">
            	@foreach ($fiches as $fiche)
	            	@if ($fiche->status == "publish" && $user->role == $fiche->class_level)
	                <div class="col-md-3">
	                    <article class="btnFiche">
	                    	<a href="{{ url('/fiche/'.$fiche->id) }}"><img src="images/qcm.png" class="img-responsive" alt="Responsive image"/><h3>{{$fiche->title}}</h3></a>
	                        <div class="spacer"></div>
	                     <span class="growBar"></span>
	                    </article>
	                </div>
	                @endif
                @endforeach
            </div>
            <div class="col-md-3">           
            	<a class="twitter-timeline" href="https://twitter.com/ecolemultimedia" data-widget-id="628169526123831296">Tweets de @ecolemultimedia</a>
        	</div>
        </div>
    </div> 
@endsection