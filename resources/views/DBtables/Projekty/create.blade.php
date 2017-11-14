@extends('Layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-left">
                <h2>Pridanie nového Projektu</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('TabProjekt.index') }}"> Späť</a>
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

    {!! Form::open(array('route' => 'TabProjekt.store','method'=>'POST')) !!}
    @include('DBtables.Projekty.createform')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Pridať nový Projekt',['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


@endsection