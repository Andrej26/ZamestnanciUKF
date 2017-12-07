@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabProjekt.create') }}"> Vytvorenie projektu</a>
        </div>
    </div>
</div>
<br>

@include('Layouts.alerts')

<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">

    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">Nazov</th>
        <th style="text-align: center; vertical-align: middle;">Autor</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($projektis as $pro)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $pro->idProjekt}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pro->nazov}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pro->meno}}</td>
            <td class="btn-group" >

                <a class="btn btn-info" href="{{ route('TabProjekt.show', $pro->idProjekt) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabProjekt.edit',$pro->idProjekt) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabProjekt.delete', $pro->idProjekt],'style'=>'display:inline']) !!}
                {!! Form::submit('Odstrániť', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>

<div class='col-xs-12 col-sm-12 col-md-12'>
    {{ $projektis->links('vendor.pagination.bootstrap-4') }}
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection