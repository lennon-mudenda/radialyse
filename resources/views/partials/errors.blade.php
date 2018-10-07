@if ($errors->any())
    @foreach ($errors->all() as $error)
    	<div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ $error }}
        </div>
    @endforeach
@endif