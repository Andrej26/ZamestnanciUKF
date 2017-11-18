@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.navbar')
@endsection

@section('content')
    <!-- Toto vypisuje hlasku, ked je zablokovaný prístup k zamestancovmu kontu -->
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="site-content">
        <div class="container">
            <main class="main-content">
                <div class="content">
                    <header class="site-header">
                        <a href="" class="logo"><img src="{{URL::to('/')}}/images/logo.png" alt=""></a>
                        <div class="header-type">
                            <h1>Univerzita Konštantína Filozofa v Nitre</h1>
                            <h2>Fakulta prírodných vied</h2>

                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>


                </div>
                <div class="aside">

                    <div class="row">
                        <div class="col-md-10">
                                <a href="{{URL::to('fpv')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 >Fakulta prírodných vied</h4>
                                </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <a href="{{URL::to('fsvz')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h4 >Fakulta sociálnych vied a zdravotníctva</h4>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <a href="{{URL::to('fss')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h4 >Fakulta stredoeurópskych štúdií</h4>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <a href="{{URL::to('ff')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h4 >Filozofická fakulta</h4>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <a href="{{URL::to('pf')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h4 >Pedagogická fakulta</h4>
                            </a>
                        </div>
                    </div>


                </div>


            </main>



            <div class="row">
                <div class="col-md-10">
                    <button type="button" class="btn btn-primary">Štatistiky</button>
                    <button type="button" class="btn btn-primary">Zamestnanci</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
            <pre>

                <h2>Profil fakulty </h2>
Hlavnou úlohou Fakulty prírodných vied je poskytovanie vysokoškolského vzdelávania a tvorivé vedecké bádanie v oblasti prírodných vied, matematiky a informatiky.

Fakulta napĺňa svoje poslanie výchovou vysokokvalifikovaných odborníkov v rámci širokej ponuky akreditovaných vedeckých a odborných študijných programov v bakalárskom, magisterskom, ako aj doktorandskom stupni štúdia.

Dlhoročnou tradíciou fakulty je príprava učiteľov prírodovedných predmetov, matematiky a informatiky. V spolupráci s ostatnými fakultami Univerzity Konštantína Filozofa vytvára v rámci slovenského vysokého školstva najširšiu ponuku učiteľského štúdia prírodovedných predmetov, matematiky a informatiky v kombinácii s jazykovými, umeleckými, technickými, humanitnými a spoločensko-vednými predmetmi.
Vysokoškolské vzdelávanie sa na Fakulte prírodných vied uskutočňuje v úzkej väzbe na výskumnú, vývojovú a ďalšie tvorivé činnosti zamestnancov a doktorandov fakulty. Prepojenie vysokoškolského vzdelávania  a vedeckého bádania má pozitívny vplyv na kvalitu vzdelávania a budúce uplatnenia absolventov fakulty v praxi. Výsledky vedeckej činnosti sú základom širokej akceptácie fakulty doma i v zahraničí.
Fakulta sa v rámci svojej činnosti venuje aj propagácii prírodných vied, matematiky a informatiky s dôrazom na mládež a laickú verejnosť.

            </pre>
                </div>
            </div>



        </div>

    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection