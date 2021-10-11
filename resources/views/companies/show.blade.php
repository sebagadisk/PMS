@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <section class="">
                <div class="row py-lg-5">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <h1 class="fw-light text-center">{{ $company->name }}</h1>
                        <p class="lead text-muted">{{ $company->description }}</p>
                        <p>
                            <a href="/companies/{{$company->id}}/edit" class="btn btn-dark">Edit</a>
                            <a href="#" class="btn btn-danger"
                               onclick="
                                        var result = confirm('Are you sure you wish to delete this company?');
                                        if( result ){
                                            event.preventDefault();
                                            document.getElementById('delete-form').submit();
                                        }
                                        ">
                                Delete
                            </a>
                        </p>
                        <form id="delete-form" action="{{ route('companies.destroy',[$company->id])}}" method="post">
                            {{ csrf_field()}}
                            <input type="hidden" name="_method" value="delete"/>
                        </form>
                    </div>
                </div>
            </section>
            @foreach($company->projects as $project)
                <div class="container bg-light">
                    <div class="row">
                        <div class="col-sm">
                            <div class="card shadow-sm">
                                {{--                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"--}}
                                {{--                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"--}}
                                {{--                             preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>--}}
                                {{--                            <rect width="100%" height="100%" fill="#55595c"/>--}}
                                {{--                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>--}}
                                {{--                        </svg>--}}
                                <div class="card-header">
                                    <h2>{{$project->name}}</h2>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $project->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a type="button" href="/projects/{{$project->id}}"
                                               class="btn btn-sm btn-outline-secondary">View</a>
                                            <a type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        </div>
                                        <small class="text-muted">{{ $project->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-4">
            <br/><br/>
            <div class="well">
                <p class="lead">
                    <strong>Search Project</strong>
                </p>
                <div class="row">
                    <div class="col-lg-8">
                        <input type="text" class="form-control searchInput">
                    </div>
                    <div class="col-lg-4 searchBtn">
                        <button class="btn btn-dark btn-md">Search</button>
                    </div>
                </div>
            </div>
            <br/><br/>
            <!-- Project Members -->
            <div class="card">
                <div class="card-header">
                    <h4>Members</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">user1</a></li>
                    <li class="list-group-item"><a href="#">user2</a></li>
                    <li class="list-group-item"><a href="#">user3</a></li>
                </ul>
            </div>
            <br>
        </div>
    </div>


@endsection
