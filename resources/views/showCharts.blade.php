@extends('Layouts.master')

@section('stylesheet')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('header')
    @include('Layouts.Navigacia.navbar')
    {!! Charts::assets() !!}
@endsection

@section('content')



    <div class="container">


        @if($idfakulty == 1)
            <h1>Štatistiky pre filozofickú fakultu</h1>
        @endif
        @if($idfakulty == 3)
            <h1>Štatistiky pre pedagogickú fakultu</h1>
        @endif
        @if($idfakulty == 2)
            <h1>Štatistiky pre fakultu stredoeurópskych štúdií</h1>
        @endif
        @if($idfakulty == 5)
            <h1>Štatistiky pre fakultu prírodných vied</h1>
        @endif
        @if($idfakulty == 7)
            <h1>Štatistiky pre Fakultu sociálnych vied a zdravotníctva</h1>
        @endif

        {!! $chartZamKat->render() !!}

    </div>

    <div class="container">

        {!! $chartProjectsCount->render() !!}

    </div>

    <div class="container">

        {!! $chartPubCount->render() !!}

    </div>


@endsection