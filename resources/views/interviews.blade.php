@extends('layout')

@section('title')
SMOKE - Photos
@endsection

@section('meta-description')
<meta name="description" content="Interviews de SMOKE" />
@endsection

@section('content')
@foreach($posts as $post)
    @include('partials.post', [
        'post'     => $post,
        'leftCol'  => 'md-2',
        'rightCol' => 'md-10'
    ])
@endforeach

@endsection
