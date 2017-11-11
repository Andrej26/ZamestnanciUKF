@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
    <div class="zarovnanie">
        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabZamestnanci')}}">
            <input  src="{{URL::to('/')}}/images/skills-013.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabRola') }}">
            <input  src="{{URL::to('/')}}/images/skills-013.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabFakulta') }}">
            <input  src="{{URL::to('/')}}/images/skills-013.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

        <a class="btn btn-outline-dark but01" href="{{ url('Admin/TabKatedra') }}">
            <input  src="{{URL::to('/')}}/images/skills-013.png" alt="Tabulka01" type="image" class="img-thumbnail_01" />
        </a>

    </div>
@endsection