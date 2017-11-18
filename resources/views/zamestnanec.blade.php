@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.zamestnanec_navbar')
@endsection

@section('content')


    <div class="site-content">
        <div class="container">
            <main class="main-content">
                <div class="content">
                    <header class="site-header">
                        <a href="" class="logo"><img src="{{URL::to('/')}}/images/logo_UKF.png" alt=""></a>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/images/UKF_mesto.jpg" alt="">
                    </div>

                    <h2>Fakulty Univerzity</h2>
                    <div class="row">

                        <div class="col-md-7">
                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.FPV') }}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Prírodných Vied </h3>
                                </a>
                                <p>FPV</p>
                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.FSVaZ') }}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Sociálnych Vied a Zdravotníctva </h3>
                                </a>
                                <p>FSVaZ</p>
                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.FSŠ') }}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Stredoeurópskych Štúdií </h3>
                                </a>
                                <p>FSŠ</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.FF') }}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Filozofická Fakulta </h3>
                                </a>
                                <p>FF</p>
                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.PF') }}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Pedagogická Fakulta </h3>
                                </a>
                                <p>PF</p>
                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{ route('Katedry.Ostatne') }}">
                                    <div class="feature-icon" ><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Ostatné časti </h3>
                                </a>
                                <p>Univerzity</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Vyhladavaci formular -->
                <div class="signup-form">
                    <div class="form-header">
                        <h2>Vyhľadávanie zamestnancov univerzity</h2>
                    </div>

                    {!! Form::open(array('route' => 'TabKatedra.store','method'=>'POST')) !!}
                    <div class="form-content">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong class="vyhladanie">Meno:</strong>
                                {!! Form::text('meno', null, array('placeholder' => 'meno','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong class="vyhladanie">Priezvisko:</strong>
                                {!! Form::text('priezvisko', null, array('placeholder' => 'priezvisko','class' => 'form-control')) !!}
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong class="vyhladanie">Fakulta:</strong>
                                {!! Form::select('fakulta',$fakulta,null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding: 0% 30% 0% 30%; margin-bottom: 5% ">
                        {!! Form::submit('Hľadať',['class' => 'btn btn-info']) !!}
                    </div>
                    {!! Form::close() !!}

                    <p class="info">Vyhľadanie zamestnanca na základe vyplnených políčok</p>
                </div>
            </main>

            <div class="graduates">
                <ul class="slides">
                    <li>
                        <div class="student-data">
                            <div class="student-image">
                                <img src="{{URL::to('/')}}/dummy/person-1.jpg" alt="">
                            </div>
                            <div class="student-details">
                                <h2 class="student-name">Meno Priezvisko</h2>
                                <ul class="student-info">
                                    <li>Fakulta: <strong>FPV</strong></li>
                                    <li>Katedra: <strong>Informatiky</strong></li>
                                    <li>Publikácie: <strong>X Y</strong></li>
                                </ul>

                                <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="student-data">
                            <div class="student-image">
                                <img src="{{URL::to('/')}}/dummy/person-1.jpg" alt="">
                            </div>
                            <div class="student-details">
                                <h2 class="student-name">Meno Priezvisko</h2>
                                <ul class="student-info">
                                    <li>Fakulta: <strong>FPV</strong></li>
                                    <li>Katedra: <strong>Informatiky</strong></li>
                                    <li>Publikácie: <strong>X Y</strong></li>
                                </ul>

                                <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>
@endsection