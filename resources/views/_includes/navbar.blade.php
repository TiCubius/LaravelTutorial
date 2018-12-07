<nav class="navbar navbar-dark bg-dark text-white">
    <a class="navbar-brand">{{ env("APP_NAME") }}</a>

    @if(Session::has("user"))
        <div class="links">
            <a class="mr-3 text-white" href="{{ route("users.logout") }}"> {{ Session::get("user")->firstname }}</a>
        </div>
    @else
        <div class="links">
            <a class="mr-3 text-white" href="{{ route("users.login") }}">Login</a>
            <a class="mr-3 text-white" href="{{ route("users.create") }}">Register</a>
        </div>
    @endif
</nav>
