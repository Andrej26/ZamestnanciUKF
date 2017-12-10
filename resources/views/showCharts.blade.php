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
            <h1>Katedry Filozofickej Fakulty</h1>
        @endif
        @if($idfakulty == 3)
            <h1>Katedry Pedagogickej Fakulty</h1>
        @endif
        @if($idfakulty == 2)
            <h1>Katedry Fakulty stredoeuropskych studii</h1>
        @endif
        @if($idfakulty == 5)
            <h1>Katedry Fakulty Prirodnych vied</h1>
        @endif
        @if($idfakulty == 7)
            <h1>Katedry Fakulta socialnych vied a zdravotnictva</h1>
        @endif

        {!! $chart->render() !!}

    </div>


@endsection