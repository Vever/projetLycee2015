@extends('layouts.master')

@section('headExtra')
<style type="text/css">
	footer{
		position: fixed;
	}
</style>
@endsection
@section('title')
<title>E lycée - {{$post->title}}</title>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-10">
            <article>
                <img src="../images/logo2.png" class="img-responsive" alt="Responsive image"/>
                
                    <h1><a href="#">{{$post->title}}</a></h1>
                    <p>{{$post->content}}</p>
                    <span class="authDate">Username, 10/10/2014</span>
            </article>
            
        </div>
        <div class="col-md-2">
            <ul id="niktamer">
            	@foreach ($posts as $key => $post)
	            	@if ($post->status == "publish")
		                <li><a href="{{url('singlePost/'.$post->id)}}">{{$post->title}}<span class="miniGrowBar"></span></a></li>
	                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div> 
@endsection