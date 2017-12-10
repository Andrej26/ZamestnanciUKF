@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.zamestnanec_navbar')
@endsection

@section('content')
    @include('Layouts.alerts')


    <div class="site-content">
        <div class="container">
            <main class="main-content">
                <div class="content">
                    <header class="site-header">
                        <a href="zames.dashboard" class="logo"><img src="{{URL::to('/')}}/images/logo_ukf.png" alt=""></a>
                        <div class="header-type">
                            <h2 class="nadpis_fakult">Fakulta prírodných vied</h2>
                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>

                </div>


            </main>


            <div class="col-md-10">
                <a class="btn btn-info" href="{{route('zam.charts',5)}}">Štatistiky</a>
                <a class="btn btn-link" href="{{ route('zozprofil',5)}}">Zamestnanecké profily</a>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="nadpis_fakult01">Profil fakulty </h2>
            <pre class="border_text01">
Hlavnou úlohou Fakulty prírodných vied je poskytovanie vysokoškolského vzdelávania a tvorivé vedecké bádanie v oblasti prírodných vied, matematiky a informatiky.
<div class="oddelovacia_ciara"><hr/></div>
Fakulta napĺňa svoje poslanie výchovou vysokokvalifikovaných odborníkov v rámci širokej ponuky akreditovaných vedeckých a odborných študijných programov v bakalárskom, magisterskom, ako aj doktorandskom stupni štúdia.
<div class="oddelovacia_ciara"><hr/></div>
Dlhoročnou tradíciou fakulty je príprava učiteľov prírodovedných predmetov, matematiky a informatiky. V spolupráci s ostatnými fakultami Univerzity Konštantína Filozofa vytvára v rámci slovenského vysokého školstva najširšiu ponuku učiteľského štúdia prírodovedných predmetov, matematiky a informatiky v kombinácii s jazykovými, umeleckými, technickými, humanitnými a spoločensko-vednými predmetmi.
Vysokoškolské vzdelávanie sa na Fakulte prírodných vied uskutočňuje v úzkej väzbe na výskumnú, vývojovú a ďalšie tvorivé činnosti zamestnancov a doktorandov fakulty. Prepojenie vysokoškolského vzdelávania  a vedeckého bádania má pozitívny vplyv na kvalitu vzdelávania a budúce uplatnenia absolventov fakulty v praxi. Výsledky vedeckej činnosti sú základom širokej akceptácie fakulty doma i v zahraničí.
Fakulta sa v rámci svojej činnosti venuje aj propagácii prírodných vied, matematiky a informatiky s dôrazom na mládež a laickú verejnosť.

            </pre>
                </div>


        </div>

    </div>

    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection