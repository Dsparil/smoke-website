@extends('layout')

@section('title')
SMOKE
@endsection

@section('meta-description')
<meta name="description" content="SMOKE est un groupe de post-stoner de la région parisienne." />
@endsection

@section('content')
@foreach($posts as $post)
    @include('partials.post', [
        'post'     => $post,
        'leftCol'  => 'sm-3',
        'rightCol' => 'sm-9'
    ])
@endforeach
@endsection
