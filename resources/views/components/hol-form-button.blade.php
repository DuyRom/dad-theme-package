<div class="col-md-8 offset-md-4">
    <button type="submit" {{$attributes->merge(['class'=>'btn btn-primary mr-1 mb-1'])}}>{{$attributes['submit'] ?? 'Submit'}}</button>
    <button type="reset" {{$attributes->merge(['class'=>'btn btn-outline-warning mr-1 mb-1'])}}>{{$attributes['reset'] ?? 'Reset'}}</button>
</div>