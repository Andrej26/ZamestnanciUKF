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
                        <a href="" class="logo"><img src="{{URL::to('/')}}/images/logo_ukf.png" alt=""></a>
                        <div class="header-type">

                            <h2 class="nadpis_fakult">Filozofická fakulta</h2>

                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>
                </div>
            </main>
            <div class="col-md-10">
                <a class="btn btn-link" href="#">Štatistiky</a>
                <a class="btn btn-link" href="{{ route('zprofil', 1)}}">Zamestnanecké profily</a>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2 class="nadpis_fakult01">Profil fakulty </h2>
                <pre class="border_text01">
                    Filozofická fakulta Univerzity Konštantína Filozofa v Nitre sa dynamicky profilovala v celom spektre jej pôsobenia od svojho vzniku v roku 1993 ako moderná výchovno-vzdelávacia, vedeckovýskumná a umelecká ustanovizeň. Dnes predstavuje zrelú a rešpektovanú vzdelávaciu inštitúciu v európskom akademickom priestore.
                    <div class="oddelovacia_ciara"><hr/></div>
                    Poslaním fakulty je rozvíjať vzdelávanie, vedu, mravnosť, umenie a kultúru v duchu národných, všeľudských, humanitných a demokratických tradícií. Filozofická fakulta UKF v Nitre zabezpečuje prípravu odborníkov v špecifických odboroch vedy, kultúry, médií, umenia, vzdeláva pracovníkov štátnej a verejnej správy, sociálnej sféry, pripravuje pedagógov pre druhý stupeň základných škôl a pre stredné školy.
                    Profilácia štúdia úzko súvisí s vedeckovýskumnými a umeleckými aktivitami katedier  a ostatných špecializovaných pracovísk. Fakulta poskytuje vzdelanie v študijných programoch všetkých troch stupňov vysokoškolského štúdia: bakalárskom, magisterskom a doktorandskom. Fakulta vytvára predpoklady pre flexibilitu vo výbere študijných programov, študijných disciplín, špecializovaných (výberových, voliteľných) prednášok, seminárov. Študenti majú možnosť uchádzať sa o štipendijné pobyty na zahraničných univerzitách a o výmenné stáže.
                    <div class="oddelovacia_ciara"><hr/></div>
                    O príťažlivosti štúdia na fakulte svedčí vysoký počet študentov dennej či externej formy štúdia a neustály záujem nových uchádzačov o štúdium. Okrem slovenských študentov na fakulte študujú v súlade s vlastnými záujmami a predstavami o spoločenskom uplatnení i desiatky zahraničných občanov.
                    <div class="oddelovacia_ciara"><hr/></div>
                    S kľúčovými výchovno-vzdelávacími cieľmi fakulty úzko súvisia vedecko-výskumné aktivity jej pracovníkov i študentov. Výskumná orientácia fakulty pokrýva široké spektrum predovšetkým humanitných a spoločenských vied v oblasti základného a aplikovaného výskumu, ako aj v oblasti inovácie didaktických metód. Najnovšie poznatky z oblasti bádania sa v rámci výskumných a kultúrno-edukačných projektov pretavujú do organizovania vedeckých podujatí a vydávania hodnotných publikácií. Pri realizácii svojho poslania fakulta kooperuje s mnohými vzdelávacími a kultúrno-osvetovými inštitúciami či vedeckými ústavmi v rámci Slovenskej republiky (Jazykovedný ústav Ľudovíta Štúra SAV, Slavistický ústav Jána Stanislava SAV, Ústav slovenskej literatúry SAV, Ústav svetovej literatúry SAV, Historický ústav SAV, Archeologický ústav SAV, Politologický kabinet SAV, Ústav etnológie SAV, Muzikologický ústav SAV, Štátny pedagogický ústav a iné). Rovnako intenzívne však podporuje a organizuje spoluprácu a výmenu informácií, pracovníkov a študentov s medzinárodnými organizáciami. Fakulta spolupracuje s mnohými európskymi vzdelávacími a výskumnými inštitúciami v rámci programov Erasmus+, CEEPUS, Medzinárodný vyšehradský fond a iných európskych grantových schém, vďaka ktorým máme možnosť participovať na mobilitách študentov, doktorandov, učiteľov a výskumných pracovníkov, projektovej a výskumnej spolupráci, diseminácii poznatkov a skúseností. Okrem týchto programov fakulta rozvíja spoluprácu aj s nečlenskými alebo mimoeurópskymi krajinami na základe bilaterálnych dohôd o spolupráci zo Severnej a Južnej Ameriky a Strednej Ázie.
                </pre>
            </div>
        </div>
    </div>

    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>

@endsection