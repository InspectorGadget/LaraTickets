@extends ('layouts.user')

@section('title', 'My Tickets')

@section('content')
    <h1>{{ auth()->user()->email }}</h1>
@stop
