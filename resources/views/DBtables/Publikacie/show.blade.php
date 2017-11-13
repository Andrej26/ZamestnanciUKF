@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Prifil projektu</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabPublikacia.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Názov publikácie:</strong>
                {{$pub->nazov}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{$pub->meno}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN:</strong>
                {{$pub->isbn}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Podtitulok: </strong>
                {{$pub->podtitulok}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Všetci autori publikácie: </strong>
                {{$pub->autori}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Typ väzby: </strong>
                {{$pub->typ}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vydavateľ: </strong>
                {{$pub->vydavatel}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rok vydania:</strong>
                {{$rok}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Počet strán: </strong>
                {{$strany}}
            </div>
        </div>

    </div>

@endsection