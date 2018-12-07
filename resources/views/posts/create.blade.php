@extends("_includes.template")

@section("content")
    <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <h4>Ajouter un nouvel article</h4>

        <form action="/posts" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" class="form-control" name="content" placeholder="Content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
