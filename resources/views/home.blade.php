@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach (Auth::user()->posts as $post)
              {{ $post->title }}
            @endforeach

        </div>
    </div>
</div>
@endsection
