@if(isset($errors) && count($errors) > 0)
    <div class="alert alert-dismissible alert-danger fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            @foreach($error->all() as $error)
            <li><strong>{!! $error !!}</strong></li>
            @endforeach
        </strong>
    </div>
@endif
