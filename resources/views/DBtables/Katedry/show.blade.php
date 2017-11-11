@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Informácie o katedre</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabKatedra.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Katedra:</strong>
                {{$kat->nazov}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Skratka:</strong>
                {{$kat->skratkaKatedry}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fakulta:</strong>
                {{$kat->nazov01}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vytvorené:</strong>
                {{$kat->created_at->diffForhumans()}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Upravené:</strong>
                {{$kat->updated_at->diffForhumans()}}
            </div>
        </div>

    </div>

@endsection