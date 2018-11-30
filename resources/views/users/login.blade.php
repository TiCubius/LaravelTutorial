@extends("_includes.template")

@section("content")
    <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <h4>Se connecter</h4>

        <form action="/users/login" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
