@extends("_includes.template")

@section("content")
    <div class="row">
        <div class="col-12 my-3">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <td>Published At</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->firstname }} {{ $post->user->lastname }}</td>
                            <td>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route("posts.show", [$post->id]) }}">
                                    <button class="btn btn-sm btn-primary">Read post</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
