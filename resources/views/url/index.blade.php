@extends('layouts.app')
@section('content')
    @foreach($urls as $url)
        {{ $url->title }}
    @endforeach
@endsection
