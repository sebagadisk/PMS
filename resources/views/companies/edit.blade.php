@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('companies.update',[$company->id]) }}" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="put"/>
                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input id="company-name"
                           name="name"
                           spellcheck="false"
                           placeholder="Enter Name"
                           class="form-control"
                           value="{{ $company->name }}"
                           required>
                </div>
                <div class="form-group">
                    <label for="company-context"></label>
                    <textarea id="company-context"
                              name="description"
                              rows="5"
                              spellcheck="false"
                              placeholder="Enter description"
                              class="form-control autosize-target text-left"
                              style="resize: vertical">
                        {{ $company->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="submit">
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <br/><br/>
            <!-- Project Members -->
            <div class="card">
                <div class="card-header">
                    <h4>Actions</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/companies/{{ $company->id }}">View Company</a></li>
                    <li class="list-group-item"><a href="/companies">All Companies</a></li>
                </ul>
            </div>
            <br>
        </div>
    </div>


@endsection
