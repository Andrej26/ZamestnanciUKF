<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Názov katedry:</strong>
            {!! Form::text('nazov', null, array('placeholder' => 'Katedra','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Skratka katedry:</strong>
            {!! Form::text('skratkaKatedry', null, array('placeholder' => 'Skratka','class' => 'form-control','required')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fakulta:</strong>
            {!! Form::select('fakulta',$fakulta,null, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>