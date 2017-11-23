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





            </main>

            @if($ifakulta == 0)
                <h1>Zoznam Profilov zamestnancov univerzity</h1>
            @endif

            @if($ifakulta == 1)
                <h1>Zoznam Profilov zamestnancov Filozofickej Fakulty</h1>
            @endif
            @if($ifakulta == 3)
                <h1>Zoznam Profilov zamestnancov Pedagogickej Fakulty</h1>
            @endif
            @if($ifakulta == 2)
                <h1>Zoznam Profilov zamestnancov Fakulty stredoeuropskych studii</h1>
            @endif
            @if($ifakulta == 4)
                <h1>Zoznam Profilov zamestnancov Fakulty Prirodnych vied</h1>
            @endif
            @if($ifakulta == 5)
                <h1>Zoznam Profilov zamestnancov Fakulta socialnych vied a zdravotnictva</h1>
            @endif

            <div class="profil">
            @if($test === 1)
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
                @endif
                @if($test === 0)
                    <p>Nenašli sa žiadni zamestnanci, ktorý by obsahovali informácie podľa zadaných parametrov.</p>
                @endif
            </div>
        </div>
    </div>

    <script src="{{URL::to('/')}}/js/Image-modal.js"></script>

@endsection