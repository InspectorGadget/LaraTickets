@extends ('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="border-bottom: 2px solid green; width: 100%;"></div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title mb-0">Tickets (Total)</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h2>{{ count(\App\Ticket::all()) }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="border-bottom: 2px solid red; width: 100%;"></div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title mb-0">Open Tickets (Total)</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h2>{{ count(\App\Ticket::all()->where('status', '=', 'open')) }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="border-bottom: 2px solid green; width: 100%;"></div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title mb-0">Category (Total)</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h2>{{ count(\App\Category::all()) }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="border-bottom: 2px solid black; width: 100%;"></div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="header-title mb-0">Admin (Total)</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h2>{{ count(\App\User::all()->where('role', '>', '1')) }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
