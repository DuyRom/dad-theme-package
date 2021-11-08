<form {{$attributes->merge(['class'=>'form form-horizontal'])}}>
    <div class="form-body">
        <div class="row">
            {{$rowContent ?? ''}}
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary mr-1 mb-1">{{$attributes['submit'] ?? 'Submit'}}</button>
                <button type="reset" class="btn btn-outline-warning mr-1 mb-1">{{$attributes['reset'] ?? 'Reset'}}</button>
            </div>
        </div>
    </div>
</form>