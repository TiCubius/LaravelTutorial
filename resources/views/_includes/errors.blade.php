@if($errors->any())
    <div class="alert alert-danger m-3">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
