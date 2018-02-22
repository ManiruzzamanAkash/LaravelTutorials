@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach ($posts as $post)
                      <h2>{{ $post->title }}</h2>
                      <div>
                        {!! $post->description !!}
                      </div>
                    @endforeach
                </div>
                <center>{{ $posts->links() }}</center>
            </div>
        </div>
    </div>
</div>
@endsection
