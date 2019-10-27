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
            <th>Priority</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        @if (count(\App\Ticket::all()->where('email', '=', auth()->user()->email)) > 0)
            @foreach (\App\Ticket::all()->where('email', '=', auth()->user()->email) as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->category->name }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>Open</td>
                    <td>{{ $ticket->priority }}</td>
                    <td>{{ $ticket->created_at }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Data</td>
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
