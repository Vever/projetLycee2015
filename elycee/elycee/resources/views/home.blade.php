@extends('layouts.master')

@section('content')
<a type="button" href="{{url('auth/login')}}">CONNEXION</a>
<div>
    <ul>
        @foreach ($posts as $post)
            <li><a>{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection