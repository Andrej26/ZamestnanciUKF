@extends('Layouts.master')

@section('content')
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Bližšie informácie o role</h2>
        </div>

        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('TabRola.index') }}"> Späť</a>
        </div>
    </div>
    <br>  <br>

    <div class="row01">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rola:</strong>
                {{$rola->rola}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vytvorené:</strong>
                {{$rola->created_at->diffForhumans()}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Upravené:</strong>
                {{$rola->updated_at->diffForhumans()}}
            </div>
        </div>

    </div>

@endsection