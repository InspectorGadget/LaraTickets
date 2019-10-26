@extends ('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1> {{ auth()->user()->email }} </h1>
@stop
