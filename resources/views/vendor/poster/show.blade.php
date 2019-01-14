@extends('multiauth::layouts.app') 

@section('content')
<div class="container">
    <table class="table mt-4 table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Via</th>
                <th scope="col">Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ $post->image }}" target="_blank">Click to view</a>
                    </td>
                    <td>
                        @foreach($post->via as $medium)
                            {{ $medium }},
                        @endforeach
                    </td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-end">{{ $posts->links() }}</div>
</div>
@endsection
