@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabFakulta.create') }}"> Vytvorenie novej fakulty</a>
        </div>
    </div>
</div>
<br>

<!-- Toto vypisuje hlasku, ked sa vsetko podari -->
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">
    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">Fakulta</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($fakultes as $fakulty)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $fakulty->idFakulta}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $fakulty->nazov}}</td>
            <td class="btn-group" >

                <a class="btn btn-info" href="{{ route('TabFakulta.show', $fakulty->idFakulta) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabFakulta.edit',$fakulty->idFakulta) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabFakulta.delete', $fakulty->idFakulta],'style'=>'display:inline']) !!}
                {!! Form::submit('Odstrániť', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection