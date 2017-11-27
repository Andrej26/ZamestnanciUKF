@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.zamestnanec_navbar')
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

                            <h2 class="nadpis_fakult">Fakulta sociálnych vied a zdravotníctva</h2>

                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>


                </div>


            </main>


            <div class="col-md-10">
                <a class="btn btn-link" href="#">Štatistiky</a>
                <a class="btn btn-link" href="{{ route('zprofil', 7)}}">Zamestnanecké profily</a>
            </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="nadpis_fakult01">Profil fakulty </h2>
            <pre class="border_text01">
Rozvoj pomáhajúcich profesií prostredníctvom vzdelávania a výskumných aktivít je základnou úlohou FSVaZ. Všetky pracoviská venujú pozornosť človeku. Človeku v najširšom možnom ponímaní - človeku ako individualite, človeku v jeho interpersonálnych vzťahoch, človeku v jeho sociálnej sieti, ale aj človeku v spoločenských kontextoch. Špecifickú pozornosť venujú človeku s problémami, tomu, ktorý si vyžaduje starostlivosť odborníkov v oblasti zdravotníckej alebo sociálnej. Človeku, ktorý by bez intervencie profesionála trpel, nemal saturované fyzické, psychické a sociálne potreby.
<div class="oddelovacia_ciara"><hr/></div>
Naším cieľom je pripravovať pre prax v pomáhajúcich profesiách kompetentných odborníkov/odborníčky. Ľudí, ktorí dokážu zastať svoje miesto v povolaní, na ktoré sa štúdiom pripravili, ktorí sú pripravení po odbornej a najmä ľudskej stránke pracovať s inými ľuďmi, pomáhať im napredovať, ošetrovať ich „zranenia“ (telesné, psychické i sociálne), viesť ich a rozvíjať. „Výsledkom vzdelávania“ v každom stupni štúdia je človek s hodnotami korešpondujúcimi s etikou výkonu pomáhajúcich profesií, teoretickým vedomosťami a zručnosťami, ktoré bude môcť rozvíjať svojím ďalším štúdiom.
<div class="oddelovacia_ciara"><hr/></div>
Fakulta sociálnych vied a zdravotníctva chce byť vo vysokoškolskom priestore príťažlivou a modernou inštitúciou. V súčasnosti ponúka zrekonštruované a technicky vybavené študijné priestory, moderné vyučovacie metódy, uznávaných odborníkov/odborníčky v akreditovaných študijných programoch, partnerské prostredie a kontakty na európske univerzity a vysoké školy. Aktívne sa zapája do spoločensky aktuálnych výskumných projektov, spolupracuje so zahraničnými univerzitami, rozvíja a podporuje mobility študentov a pedagógov, má nadviazané živé kontakty s domácimi a zahraničnými inštitúciami štátneho, verejného i mimovládneho a súkromného sektora.
            </pre>
                </div>



        </div>

    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection

