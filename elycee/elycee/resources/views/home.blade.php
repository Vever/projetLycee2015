@extends('layouts.master')

@section('content')
<div>
    <ul>
        @foreach ($posts as $post)
            <li><a>{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>
@endsection