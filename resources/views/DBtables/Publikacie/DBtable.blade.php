    @extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabPublikacia.create') }}"> Vytvorenie publikácie</a>
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
        <th style="text-align: center; vertical-align: middle;">Názov</th>
        <th style="text-align: center; vertical-align: middle;">Autor</th>
        <th style="text-align: center; vertical-align: middle;">Typ väzby</th>
        <th style="text-align: center; vertical-align: middle;">Vydavateľ</th>
        <th style="text-align: center; vertical-align: middle;">Kód</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($publikacis as $pub)

        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->idPublikacia}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->nazov}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->meno}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->typ}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->vydavatel}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $pub->kod}}</td>
            <td class="btn-group" style="text-align: center; vertical-align: middle;" >

                <a class="btn btn-info" href="{{ route('TabPublikacia.show', $pub->idPublikacia) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabPublikacia.edit',$pub->idPublikacia) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabPublikacia.delete', $pub->idPublikacia],'style'=>'display:inline']) !!}
                {!! Form::submit('Odstrániť', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>

<div class='col-xs-12 col-sm-12 col-md-12'>
    {{ $publikacis->links('vendor.pagination.bootstrap-4') }}
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection