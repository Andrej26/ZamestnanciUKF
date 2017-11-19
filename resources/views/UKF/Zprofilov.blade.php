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

            <h1>Zoznam Profilov</h1>
            <div class="profil">

                @foreach ($zamestnanec as $zam)
                    <ul class="slides">
                            <div class="student-data">
                                <div class="student-image">
                                    <a href="{{URL::to("UKF/Profil")}}"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="50%" width="auto"></a>
                                </div>
                                <div class="student-details">
                                    <a href="{{URL::to("UKF/Profil")}}"><h2 class="student-name">{{ $zam['meno']}}</h2></a>
                                    <ul class="student-info">
                                        <li>e-mail: <strong>{{ $zam['email']}}</strong></li>
                                        <li>Rola: <strong>{{ $zam['rola']}}</strong></li>
                                        <li>Katedra: <strong>{{ $zam['katedra']}}</strong></li>
                                    </ul>
                                    <p> {{ $zam['profil']}} </p>
                                </div>
                            </div>
                            </li>
                        </ul>
                @endforeach

            </div>

        </div>
    </div>
    <script src="{{URL::to('/')}}/js/Image-modal.js"></script>

@endsection