@extends('Layouts.master')

<br>
@section('header')
    <h2>Zamestnanci UKF</h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('login') }}">Prihlásenie</a>
            </div>
        </div>
    </div>
@endsection