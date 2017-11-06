@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabZamestnanci.create') }}"> Vytvorenie zamestnanca</a>
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
        <th>id</th>
        <th>meno</th>
        <th>email</th>
        <th>heslo</th>
        <th>stav</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($zamestnanciss as $zam)
        <tr>
            <td>{{ $zam->id}}</td>
            <td>{{ $zam->name}}</td>
            <td>{{ $zam->email}}</td>
            <td>{{ $zam->password}}</td>
            <td>{{ $zam->stav}}</td>
            <td class="btn-group inline" >

                <a class="btn btn-info" href="{{ route('TabZamestnanci.show', $zam->id) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabZamestnanci.edit',$zam->id) }}">Uprav</a>
                <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"  title="Zmena stavu zamestnanca">
                        ZSZ
                    </button>
                    <div class="dropdown-menu zarovnanie">
                        <a class="btn btn-success" href="{{ route('zmena_stavu1',$zam->id) }}"
                           data-toggle="tooltip" title="Schválenie prihlásenia zamestnanca na web">SPU</a>
                        <a class="btn btn-danger" href="{{ route('zmena_stavu0',$zam->id) }}"
                           data-toggle="tooltip" title="Odmietnutie prihlásenia zamestnanca na web">OPU</a>
                    </div>
                </div>

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