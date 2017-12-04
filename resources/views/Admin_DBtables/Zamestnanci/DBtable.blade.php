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


@include('Layouts.alerts')


<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">
    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">meno</th>
        <th style="text-align: center; vertical-align: middle;">email</th>
        <th style="text-align: center; vertical-align: middle;">titul</th>
        <th style="text-align: center; vertical-align: middle;">Rola</th>
        <th style="text-align: center; vertical-align: middle;">Katedra</th>
        <th style="text-align: center; vertical-align: middle;">Stav</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($zamestnanciss as $zam)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->idzamestnanec}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->meno}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->email}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->profil}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->rola}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $zam->nazov}}</td>
            <td style="text-align: center; vertical-align: middle;">
                @if($zam->aktivny !=0)
                    aktívne konto
                @else
                    deaktivované konto
                @endif
            </td>
            <td class="btn-group" >

                <a class="btn btn-info" href="{{ route('TabZamestnanci.show', $zam->idzamestnanec) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabZamestnanci.edit',$zam->idzamestnanec) }}">Uprav</a>
                <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"  title="Zmena stavu zamestnanca">
                        ZSZ
                    </button>
                    <div class="dropdown-menu zarovnanie">
                        <a class="btn btn-success" href="{{ route('zmena_stavu1',$zam->idzamestnanec) }}"
                           data-toggle="tooltip" title="Schválenie prihlásenia zamestnanca na web">SPU</a>
                        <a class="btn btn-danger" href="{{ route('zmena_stavu0',$zam->idzamestnanec) }}"
                           data-toggle="tooltip" title="Odmietnutie prihlásenia zamestnanca na web">OPU</a>
                    </div>
                </div>

            </td>
        </tr>
    @endforeach
</table>

    <div class='col-xs-12 col-sm-12 col-md-12'>
        {{ $zamestnanciss->links('vendor.pagination.bootstrap-4') }}
    </div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection