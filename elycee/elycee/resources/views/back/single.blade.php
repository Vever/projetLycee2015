@extends('back.master')

@section('username')
<li>Hello {{$user->name}}<a href="{{url('auth/logout')}}">se déconnecter</a></li>
@endsection

@section('content')
	<div class="col-xs-6 col-lg-4 col-md-offset-2 ">
		<h2><a href="#" title="{{$post->title}}" style="font-size:80%;">{{$post->title}}</a></h2>
		<p>{{$post->content}}</p>
	</div><!--/.col-xs-6.col-lg-4-->
@endsection