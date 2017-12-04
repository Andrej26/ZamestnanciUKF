<div class="signup-form">
    <div class="form-header">
        <h2>Vyhľadávanie zamestnancov univerzity</h2>
    </div>

    {!! Form::open(array('route' => 'advanced_search_zam','method'=>'POST')) !!}
    <div class="form-content">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="vyhladanie">Meno,Priezvisko:</strong>
                {!! Form::text('meno', null, array('placeholder' => 'meno/priezvisko','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="vyhladanie">Katedra:</strong>
                {!! Form::text('katedra', null, array('placeholder' => 'katedra','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="vyhladanie">Fakulta:</strong>
                {!! Form::select('fakulta',$fakulta,null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="vyhladanie">Tagy:</strong>
                {!! Form::select('tagy[]',$tags,null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) !!}
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding: 0% 30% 0% 30%; margin-bottom: 5% ">
        {!! Form::submit('Hľadať',['class' => 'btn btn-info']) !!}
    </div>
    {!! Form::close() !!}

    <p class="info">Vyhľadanie zamestnanca na základe vyplnených políčok</p>
</div>