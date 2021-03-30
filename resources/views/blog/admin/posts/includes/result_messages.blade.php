@if($errors->any())
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
            {{ $errors->first() }}
        </div>
    </div>
</div>
@endif

@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif
