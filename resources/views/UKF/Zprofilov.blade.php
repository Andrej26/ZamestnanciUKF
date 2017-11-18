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
                        <div class="header-type">
                            <h1>Choose your future today!</h1>
                            <p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt mollitia animi est laborum dolorum.</p>
                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>
                </div>
            </main>
            <h1>Zoznam Profilov</h1>
            <div class="profil">
                <ul class="slides">
                    <div class="student-data">
                        <div class="student-image">
                            <a href="{{URL::to("/")}}/Profil"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="50%" width="auto"></a>
                        </div>
                        <div class="student-details">
                            <a href="{{URL::to("/")}}/Profil"><h2 class="student-name">Meno Priezvisko</h2></a>
                            <ul class="student-info">
                                <li>e-mail: <strong><a href="mailto:m.priezvisko@ukf.sk">m.priezvisko@ukf.sk</a></strong></li>
                                <li>katedra: <strong>Katedra Informatiky FPV</strong></li>
                                <li>Mobilne cislo: <strong>999 999 999</strong></li>
                            </ul>
                            <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum. </p>
                        </div>
                    </div>
                    </li>
                </ul>
                <ul class="slides">
                    <div class="student-image">
                        <a href="{{URL::to("/")}}/Profil"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="50%" width="auto"></a>
                    </div>
                    <div class="student-details">
                        <a href="{{URL::to("/")}}/Profil"><h2 class="student-name">Meno Priezvisko</h2></a>
                            <ul class="student-info">
                                <li>e-mail: <strong><a href="mailto:m.priezvisko@ukf.sk">m.priezvisko@ukf.sk</a></strong></li>
                                <li>katedra: <strong>Katedra Informatiky FPV</strong></li>
                                <li>Mobilne cislo: <strong>999 999 999</strong></li>
                            </ul>
                            <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum. </p>
                    </div>
                    </ul>
                    <ul class="slides">
                        <div class="student-data">
                            <div class="student-image">
                                <a href="{{URL::to("/")}}/Profil"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="50%" width="auto"></a>
                            </div>
                            <div class="student-details">
                                <a href="{{URL::to("/")}}/Profil"><h2 class="student-name">Meno Priezvisko</h2></a>
                                <ul class="student-info">
                                    <li>e-mail: <strong><a href="mailto:m.priezvisko@ukf.sk">m.priezvisko@ukf.sk</a></strong></li>
                                    <li>katedra: <strong>Katedra Informatiky FPV</strong></li>
                                    <li>Mobilne cislo: <strong>999 999 999</strong></li>
                                </ul>
                                <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum.Ipsam officiis delectus vel vitae nulla modi rerum. </p>
                            </div>
                        </div>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <script src="{{URL::to('/')}}/js/Image-modal.js"></script>

@endsection