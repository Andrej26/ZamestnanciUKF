@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Profil tagu</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabTag.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Názov publikácie:</strong>
                {{$tag->name}}
            </div>
        </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vytvorené:</strong>
            {{$tag->created_at->diffForhumans()}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Upravené:</strong>
            {{$tag->updated_at->diffForhumans()}}
        </div>
    </div>

    </div>

@endsection