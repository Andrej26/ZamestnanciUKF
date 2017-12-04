    @extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.admin_navbar')
@endsection

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 margin-tb">
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('TabTag.create') }}"> Vytvorenie tagu</a>
        </div>
    </div>
</div>
<br>

@include('Layouts.alerts')

<table class="table table-bordered col-xs-12 col-sm-12 col-md-12 text-center">

    <tr>
        <th style="text-align: center; vertical-align: middle;">id</th>
        <th style="text-align: center; vertical-align: middle;">Názov</th>
        <th style="text-align: center; vertical-align: middle;" width="280px">Action</th>
    </tr>

    @foreach ($tagys as $tag)

        <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $tag->id}}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $tag->name}}</td>
            <td class="btn-group" style="text-align: center; vertical-align: middle;" >

                <a class="btn btn-info" href="{{ route('TabTag.show', $tag->id) }}">Ukáž</a>
                <a class="btn btn-primary" href="{{ route('TabTag.edit',$tag->id) }}">Uprav</a>
                {!! Form::open(['method' => 'DELETE','route' => ['TabTag.delete', $tag->id],'style'=>'display:inline']) !!}
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