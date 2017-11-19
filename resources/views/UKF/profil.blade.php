@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.navbar')
@endsection

@section('content')
    <div class="site-content">
        <div class="container">
            <main class="main-content">
                <div class="content">
                    <header class="site-header">
                        <a href="" class="logo"><img src="{{URL::to('/')}}/images/logo_ukf.png" alt=""></a>

                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>
                </div>

                    <div class="row">

                        <div class="border_links01">

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fpv')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta prírodných vied</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fsvz')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta sociálnych vied a zdravotníctva</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fss')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta stredoeurópskych štúdií</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/ff')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Filozofická fakulta</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/pf')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Pedagogická fakulta</h4>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
            </main>

            <h1>Profil</h1>
            <div class="profil">
                <ul class="slides">
                    <li>
                        <div class="student-data">
                            <div class="student-image">
                                <img id="zam-img" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="auto" width="100%">
                                <div id="zamModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </div>
                            <div class="student-details">
                                <h2 class="student-name">Meno Priezvisko</h2>
                                <ul class="student-info">
                                    <li>e-mail: <strong><a href="mailto:m.priezvisko@ukf.sk">m.priezvisko@ukf.sk</a></strong></li>
                                    <li>katedra: <strong>Katedra Informatiky FPV</strong></li>
                                    <li>Mobilne cislo: <strong>999 999 999</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class ="popis">
                            <h2>Popis:</h2>
                            <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum?
                                Ipsam officiis delectus vel vitae nulla modi rerum.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum?
                                Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.
                                Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum.
                                Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum.
                                Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.
                                Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="komentare">
                <h1>Komentáre</h1>
                <textarea class="koment"></textarea>
                <p><input type="button" class="button_k" value="Pridaj Komentar"></p>
            </div>
        </div>
    </div>
<script src="{{URL::to('/')}}/js/Image-modal.js"></script>

@endsection