@extends('layouts.master')
@section('title')
<title>E lycée - Accueil</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    	<div class="col-md-6">
    	@foreach ($posts as $key => $post)
	    	@if ($key == 0)
	    		<article>
	                <img src="images/logo2.png" class="img-responsive" alt="Responsive image"/>
	                <h3><a href="{{url('singlePost/'.$post->id)}}">{{$post->title}}</a></h3>
	                <p>{{$post->abstract}}</p>
	                <span class="authDate">Username, DATE</span>
	                <div class="spacer"></div>
	                <a href="{{url('singlePost/'.$post->id)}}" ><span class="growBar"></span></a>
	            </article>
			@endif
			@endforeach
			</div>
			<div class="col-md-3">
			@foreach ($posts as $key => $post)
			@if ($key != 0 && $post->status == "publish")
	        	<article>
	                <img src="images/logo2.png" class="img-responsive" alt="Responsive image"/>
	                <h3><a href="{{url('singlePost/'.$post->id)}}">{{$post->title}}</a></h3>
	                <p>{{$post->abstract}}</p>
	                <span class="authDate">Username, DATE</span>
	                <div class="spacer"></div>
	                <a href="{{url('singlePost/'.$post->id)}}" ><span class="growBar"></span></a>
	            </article>
	        @endif
        @endforeach
        </div>
        <div class="col-md-3">
            <ul id="niktamer">
            	@foreach ($posts as $key => $post)
	            	@if ($post->status == "publish")
		                <li><a href="{{url('singlePost/'.$post->id)}}">{{$post->title}}<span class="miniGrowBar"></span></a></li>
	                @endif
                @endforeach
            </ul>
            <a class="twitter-timeline" href="https://twitter.com/ecolemultimedia" data-widget-id="628169526123831296">Tweets de @ecolemultimedia</a>
        </div>
    </div>
</div>
@endsection