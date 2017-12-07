@extends('Layouts.master')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-left">
                <h2>Úprava komentára</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('TabKomentar.index') }}"> Späť</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>Nastala chyba. Zadali ste zle vstupné údaje.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($koment, ['method' => 'PATCH','route' => ['TabKomentar.update', $koment->idKomentar]]) !!}
    @include('Admin_DBtables.Komentare.updateform')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Upravenie komentáru',['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


@endsection