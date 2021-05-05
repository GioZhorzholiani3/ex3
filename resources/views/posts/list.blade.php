@extends('layout.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">created at</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>

            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->author_name}}</td>
            <td>{{$post->created_at}}</td>

            <td>
                <a class="nav-link disabled" href="{{route('posts.edit',$post->id)}}">edit</a>
            </td>
            <td>
                <a class="nav-link disabled" href="{{route('posts.delete',$post->id)}}">delete</a>
            </td>


        </tr>
        @endforeach
        </tbody>

    </table>

        {{$posts->links()}}




@endsection
