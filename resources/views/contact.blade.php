@extends('layout')

@section('title')
SMOKE - Shows
@endsection

@section('meta-description')
<meta name="description" content="Contacter Muertissima, email, réseaux sociaux" />
@endsection

@section('content')
<div class="row mt-2">
    <div class="col">
        <h1>Contact</h1>
    </div>
</div>
<div class="row">
    <div class="col text-center">
        <a class="btn btn-lg btn-floating" style="background-color: #3b5998;" href="https://www.facebook.com/smoke.official95/" role="button">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>
    <div class="col text-center">
        <a class="btn btn-lg btn-floating" style="background-color: #ac2bac;" href="https://www.instagram.com/SMOKE_OFFICIAL95/" role="button">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    <!--
    <div class="col text-center">
        <a class="btn btn-lg btn-floating" style="background-color: #ed302f;" href="" role="button">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
    -->
</div>
<div class="row">
    <div class="col text-center my-5">
        <a href="mailto:{{ env('CONTACT_MAIL') }}">Envoyez-nous un message à : {{ env('CONTACT_MAIL') }}</a>
        <div style="display: block; height: 300px;"></div>
    </div>
</div>
@endsection
