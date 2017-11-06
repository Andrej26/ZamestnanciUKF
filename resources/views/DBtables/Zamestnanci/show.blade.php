@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Prifil zamestnanca</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabZamestnanci.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Meno:</strong>
                {{$zam->name}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{$zam->email}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heslo: </strong>
                {{$zam->password}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stav: </strong>
                {{$zam->stav}}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vytvorené:</strong>
                {{$zam->created_at->diffForhumans()}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Upravené:</strong>
                {{$zam->updated_at->diffForhumans()}}
            </div>
        </div>

    </div>

@endsection