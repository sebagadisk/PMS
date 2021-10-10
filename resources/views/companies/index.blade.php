@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">List of Companies</div>
            <div class="panel-body">

            @foreach($companies as $company)
                <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">{{ $company->name }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

@endsection
