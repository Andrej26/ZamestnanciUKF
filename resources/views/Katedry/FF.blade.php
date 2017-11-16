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

                    <h2>Filozofická Fakulta</h2>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Dekanát Filozofickej fakulty </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Jazykové centrum </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra  translatológie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra anglistiky a amerikanistiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra archeológie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra etnológie a folkloristiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra filozofie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra germanistiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra histórie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra kulturológie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra manažmentu kult.a turizmu </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra masm. komunikácie a reklamy </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra muzeológie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra náboženských štúdií </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra politológie a euroáz.štúdií </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra romanistiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra rusistiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra slovenského jazyka a litera </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra sociológie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra všeob. a aplikovanej etiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Katedra žurnalistiky </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Ústav lit. a umeleckej komunikácie </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Ústav pre v. k. d. Konšt. a Metoda </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">Mediálne centrum </h3>
                    </div>

                    <div class="feature-icon" >
                        <h3 class="feature-title">doktorandské štúdium </h3>
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