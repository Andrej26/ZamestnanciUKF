@extends('Layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-left">
                <h2>Zmena hesla</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('ukf') }}"> Späť</a>
            </div>
        </div>
    </div>

    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Nastala chyba. Zadali ste zle vstupné údaje.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'zmenahesla','method'=>'POST', 'class' => 'form-horizontal')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zadajte váš email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control','required')) !!}
            </div>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Poslať',['class' => 'btn btn-info']) !!}
    </div>
    <br> <br> <br>
    {!! Form::close() !!}

@endsection