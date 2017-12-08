@inject('service', 'App\Http\Controllers\ZiskajUdajeZamestnanca.php')

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
                        <a href="zames.dashboard" class="logo"><img src="{{URL::to('/')}}/images/logo_UKF5.png" alt=""></a>
                        <div class="header-type">
                            <h1><strong>Univerzita Konštantína Filozofa v Nitre</strong></h1>
                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/images/UKF_mesto.jpg" alt="">
                    </div>
                    <p> </p>



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

            <!-- profil zamestnanca --->
            <div class="profil">

                <div class="slides">
                            <div class="student-image">
                                <img src="{{URL::to('/')}}/dummy/person-1.jpg" alt="">
                            </div>
                            <div class="student-details">
                                <button type="submit" class="button_k" >Upravit osobne informacie</button>
                                <button type="submit" class="button_k"><a href="{{URL::to('/')}}/Zamestnanec/publikacie">Moje publikacie</a></button>
                                <h2 class="student-name">Meno Priezvisko</h2>
                                <ul class="student-info">
                                    <li>Fakulta: <strong>FPV</strong></li>
                                    <li>Katedra: <strong>Informatiky</strong></li>
                                    <li>Publikácie: <strong>X Y</strong></li>

                                </ul>

                                <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                            </div>

                        </div>

            </div>
        </div>

    </div>

    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>
@endsection
