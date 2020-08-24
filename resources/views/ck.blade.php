 
<form>
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="summary-ckeditor" rows="3"></textarea>
  </div>
</form>

<script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>