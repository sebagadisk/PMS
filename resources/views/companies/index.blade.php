@extends('layouts.app')

@section('content')

    <br/><br/><br/>
    <div class="card">
        <div class="card-header">
            <h4>List of companies</h4>
            <a class="float-right btn btn-primary btn-sm" href="/companies/create">Create new company</a>
        </div>
        @foreach($companies as $company)
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
            </ul>
        @endforeach
    </div>

@endsection
