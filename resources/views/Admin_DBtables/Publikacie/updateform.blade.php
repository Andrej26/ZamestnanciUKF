<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Názov publikácie:</strong>
            {!! Form::text('nazov', null, array('placeholder' => 'názov','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kód:</strong>
            {!! Form::text('kod', null, array('placeholder' => 'kód','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Autor:</strong>
            {!! Form::select('meno',$pub02,$pub01->Zamestnanec_idzamestnanec, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ISBN:</strong>
            {!! Form::text('isbn', null, array('placeholder' => 'ISBN','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Podtitulok:</strong>
            {!! Form::text('podtitulok', null, array('placeholder' => 'podtitulok','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Všetci autori publikácie:</strong>
            {!! Form::text('autori', null, array('placeholder' => 'autori','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Typ väzby:</strong>
            {!! Form::text('typ', null, array('placeholder' => 'väzba','class' => 'form-control','required')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Vydavateľ:</strong>
            {!! Form::text('vydavatel', null, array('placeholder' => 'vydavateľ','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rok vydania:</strong>
            {!! Form::text('rok', null, array('placeholder' => 'rok','class' => 'form-control','required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Počet strán:</strong>
            {!! Form::text('pocetStran', null, array('placeholder' => 'počet strán','class' => 'form-control','required')) !!}
        </div>
    </div>

</div>