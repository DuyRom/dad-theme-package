<form {{$attributes->merge(['class'=>'form form-horizontal'])}}>
	{{$csrf ?? ''}}
    <div class="form-body">
        <div class="row">
            {{$rowContent ?? ''}}
        </div>
    </div>
</form>