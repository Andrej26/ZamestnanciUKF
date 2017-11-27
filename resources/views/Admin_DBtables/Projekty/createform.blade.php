<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Názov projektu:</strong>
            {!! Form::text('nazov', null, array('placeholder' => 'názov','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Začiatok písania projektu:</strong>
            {!! Form::text('zaciatok', null, array('placeholder' => 'rok','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Koniec písania projektu:</strong>
            {!! Form::text('koniec', null, array('placeholder' => 'rok','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Registračné číslo:</strong>
            {!! Form::text('regCislo', null, array('placeholder' => 'číslo','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Autor:</strong>
            {!! Form::select('meno',$pro02,null, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>