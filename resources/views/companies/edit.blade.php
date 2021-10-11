@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">

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
