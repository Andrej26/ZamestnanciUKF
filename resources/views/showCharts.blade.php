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

        <h1>Katedry</h1>

        {!! $chart->render() !!}

    </div>


@endsection