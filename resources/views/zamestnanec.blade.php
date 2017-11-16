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
                        <a href="" class="logo"><img src="{{URL::to('/')}}/images/logo_UKF5.png" alt=""></a>
                        <div class="header-type">
                            <h1><strong>Univerzita Konštantína Filozofa v Nitre</strong></h1>
                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/images/UKF_mesto.jpg" alt="">
                    </div>

                    <h2>Prehľad Fakúlt Univerzity</h2>
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="feature rounded-icon">
                                <div class="feature-icon" ><a href="{{ route('Katedry.FPV') }}"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Fakulta Prírodných Vied </h3>
                                <p>FPV</p>
                            </div>

                            <div class="feature rounded-icon">
                                <div class="feature-icon"><a href="{{ route('Katedry.FSVaZ') }}"><i class="icon-bus"></i></div>
                                <h3 class="feature-title">Fakulta Sociálnych Vied a Zdravotníctva </h3>
                                <p>FSVaZ</p>
                            </div>
                            <div class="feature rounded-icon">
                                <div class="feature-icon"><a href="{{ route('Katedry.FSŠ') }}"><i class="icon-school"></i></div>
                                <h3 class="feature-title">Fakulta Stredoeurópskych Štúdií </h3>
                                <p>FSŠ</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature rounded-icon">
                                <div class="feature-icon"><a href="{{ route('Katedry.FF') }}"><i class="icon-foot-ball"></i></div>
                                <h3 class="feature-title">Filozofická Fakulta </h3>
                                <p>FF</p>
                            </div>

                            <div class="feature rounded-icon">
                                <div class="feature-icon"><a href="{{ route('Katedry.PF') }}"><i class="icon-foot-ball"></i></div>
                                <h3 class="feature-title">Pedagogická Fakulta </h3>
                                <p>PF</p>
                            </div>

                            <div class="feature rounded-icon">
                                <div class="feature-icon" ><a href="{{ route('Katedry.Ostatne') }}"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Ostatné </h3>
                                <p>Ostatné</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Vyhladavanie -->
                <div class="aside">
                    <form action="#" class="signup-form">
                        <div class="form-header">
                            <h3>Vyhľadávanie zamestnancov UKF</h3>
                        </div>
                        <div class="form-content">
                            <p><input type="text" placeholder="Meno..."></p>
                            <p><input type="text" placeholder="Priezvisko..."></p>
                            <p></p>
                            <p><span class="Fakulta">
										<select name="" id="">
                                            <option value="#">Fakulta...</option>
											<option value="#">Fakulta Prírodných Vied</option>
											<option value="#">Fakulta Sociálnych Vied a Zdravotníctva</option>
                                            <option value="#">Fakulta Stredoeurópskych Štúdií</option>
                                            <option value="#">Filozofická Fakulta</option>
                                            <option value="#">Pedagogická Fakulta</option>
										</select>
									</span></p>
                            <p>
                                <input type="submit" value="Hľadať">
                            </p>
                        </div>
                    </form>
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