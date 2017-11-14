@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabKatedra.create') }}"> Vytvorenie novej katedry</a>
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
        <th style="text-align: center; vertical-align: middle;">Katedra</th>
        <th style="text-align: center; vertical-align: middle;">Skratka</th>
        <th style="text-align: center; vertical-align: middle;">Fakulta</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($katedres as $kat)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $kat->idKatedra}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kat->nazov}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kat->skratkaKatedry}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kat->nazov01}}</td>
            <td class="btn-group" >

                <a class="btn btn-info" href="{{ route('TabKatedra.show', $kat->idKatedra) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabKatedra.edit',$kat->idKatedra) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabKatedra.delete',$kat->idKatedra],'style'=>'display:inline']) !!}
                {!! Form::submit('Odstrániť', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>

<div class='col-xs-12 col-sm-12 col-md-12'>
    {{ $katedres->links('vendor.pagination.bootstrap-4') }}
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection