@extends("_includes.template")

@section("content")
    <div class="d-flex flex-column align-items-center">
        <h4>S'enregistrer</h4>
        <form action="/users" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input id="exampleInputEmail1" class="form-control" type="text" name="firstname" placeholder="Firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input id="lastname" class="form-control" type="text" name="lastname" placeholder="Lastname">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input id="password" class="form-control" type="password" name="password_confirmation" placeholder="Password Confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
