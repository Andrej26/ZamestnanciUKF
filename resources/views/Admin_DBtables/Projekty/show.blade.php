@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Profil projektu</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabProjekt.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Názov projektu:</strong>
                {{$pro->nazov}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Začiatok písania:</strong>
                {{$pro->zaciatok}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Koniec písania:</strong>
                {{$pro->koniec}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Registračné číslo: </strong>
                {{$pro->regCislo}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor projektu: </strong>
                {{$pro->meno}}
            </div>
        </div>

    </div>

@endsection