@extends('layout.app')
@section('content')
    <div  style="margin: 20px">
    @foreach($posts as $post)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>


    @endforeach

@endsection
