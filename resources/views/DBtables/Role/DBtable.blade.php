@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabRola.create') }}"> Vytvorenie novej role</a>
        </div>
    </div>
</div>
<br>

<!-- Toto vypisuje hlasku, ked sa vsetko podari -->
@if ($message = Session::get('success'))
    <div class="alert alert-success" style="text-align: center">
        <p class="message">{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">
    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">Rola</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($roless as $rola)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $rola->idrolaPouzivatela}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $rola->rola}}</td>
            <td class="btn-group" >

                <a class="btn btn-info" href="{{ route('TabRola.show', $rola->idrolaPouzivatela) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabRola.edit',$rola->idrolaPouzivatela) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabRola.delete', $rola->idrolaPouzivatela],'style'=>'display:inline']) !!}
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