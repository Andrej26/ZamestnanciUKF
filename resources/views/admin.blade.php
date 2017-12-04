@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
    @include('Layouts.alerts')

    <div class="zarovnanie">
        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabZamestnanci')}}">
            <input  src="{{URL::to('/')}}/images/zamestnanci.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabRola') }}">
            <input  src="{{URL::to('/')}}/images/rolapouzivatela.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabFakulta') }}">
            <input  src="{{URL::to('/')}}/images/fakulta.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabKatedra') }}">
            <input  src="{{URL::to('/')}}/images/katedra.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabProjekt') }}">
            <input  src="{{URL::to('/')}}/images/projekt.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabPublikacia') }}">
            <input  src="{{URL::to('/')}}/images/publikacie.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabKomentar') }}">
            <input  src="{{URL::to('/')}}/images/komentar.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabTag') }}">
            <input  src="{{URL::to('/')}}/images/tagy.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

    </div>
@endsection