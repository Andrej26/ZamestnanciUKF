@extends('Layouts.master')

@section('stylesheet')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
            <div class="float-left">
                <h2>Uprava zamestnanca</h2>
            </div>

            <div class="float-right">
                <a class="btn btn-success float-left" href="{{route('iny.profil', $zam01 -> idzamestnanec )}}">Späť</a>
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

    {!! Form::model($zam01, ['method' => 'PATCH','route' => ['TabZamestnanci.UpdateByMatus', $zam01->idzamestnanec]]) !!}
    @include('Admin_DBtables.Zamestnanci.updateform')
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {!! Form::submit('Upravenie zamestnanca',['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


@endsection

@section('script')
    {!! Html::script('js/select2.min.js') !!}
    <script>
        $('.select2-multi').select2();
    </script>
@endsection