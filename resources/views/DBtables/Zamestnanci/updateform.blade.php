<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Meno:</strong>
            {!! Form::text('meno', null, array('placeholder' => 'Meno','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Heslo:</strong>
            {!! Form::text('heslo', null, array('placeholder' => 'Heslo','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Najvyžší titul(profil zamestnanca):</strong>
            {!! Form::text('profil', null, array('placeholder' => 'titul','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Katedra:</strong>
            {!! Form::select('nazov',$zam02,$zam01->Katedra_idKatedra, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>