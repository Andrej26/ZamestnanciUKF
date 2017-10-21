@extends('Layouts.master')

@section('content')
    <div class="modal-dialog modal-sm">

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-left">
                <h3>Prihlasovací formulár</h3>
            </div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('UKF.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Nastal nejaký problém. Zle si zadal meno alebo heslo.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'prihlas','method'=>'POST')) !!}
    @include('Layouts.prihlasform')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Prihlásenie',['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    </div>

@endsection