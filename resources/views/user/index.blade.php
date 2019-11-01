@extends ('layouts.user')

@section('title', 'My Tickets')

@section('content')
    <h3>Your Tickets</h3>
    <hr />

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Title</th>
            <th>Status</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @if (count(auth()->user()->tickets) > 0)
            @foreach (auth()->user()->tickets as $ticket)
                <tr class="table-item">
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->category->name }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>Open</td>
                    <td>{{ \Carbon\Carbon::parse($ticket->created_at)->diffForHumans() }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Data</td>
                <td>No Data</td>
                <td>No Data</td>
                <td>No Data</td>
                <td>No Data</td>
            </tr>
        @endif
        </tbody>
    </table>
@stop
