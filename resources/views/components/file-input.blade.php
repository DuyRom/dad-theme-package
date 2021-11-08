<fieldset class="form-group">
    <label for="basicInputFile">{{$attributes['label'] ?? NULL}}</label>
    <div class="custom-file">
        <input {{$attributes->merge(['class'=>'custom-file-input'])}} type="file">
        <label class="custom-file-label" for="inputGroupFile01">Chọn file</label>
    </div>
</fieldset>