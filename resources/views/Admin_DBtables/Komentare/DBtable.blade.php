@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>

@include('Layouts.alerts')


<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">
    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">komentár</th>
        <th style="text-align: center; vertical-align: middle;">odosieľateľ</th>
        <th style="text-align: center; vertical-align: middle;">prijímateľ</th>
        <th style="text-align: center; vertical-align: middle;">odsúhlasený</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($komentares as $kom)
        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $kom->idKomentar}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kom->komentar}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kom->meno}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $kom->meno01}}</td>
            @if($kom->odsuhlaseny == 0)
            <td style="text-align: center; vertical-align: middle;">nový</td>

            @elseif($kom->odsuhlaseny == 1)
            <td style="text-align: center; vertical-align: middle;">schválený</td>

            @else
                <td style="text-align: center; vertical-align: middle;">neschválený</td>

            @endif
            <td class="btn-group" >

                <a class="btn btn-primary" href="{{ route('TabKomentar.edit',$kom->idKomentar) }}">Uprav</a>
                <a class="btn btn-warning" href="{{ route('TabKomentar.schvalenie',$kom->idKomentar) }}">Schválenie</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabKomentar.delete', $kom->idKomentar],'style'=>'display:inline']) !!}
                {!! Form::submit('Odstrániť', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>

    <div class='col-xs-12 col-sm-12 col-md-12'>
        {{ $komentares->links('vendor.pagination.bootstrap-4') }}
    </div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endsection