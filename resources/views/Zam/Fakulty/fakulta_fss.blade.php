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

                            <h2 class="nadpis_fakult">Fakulta stredo-európskych štúdií</h2>

                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>


                </div>


            </main>


            <div class="col-md-10">
                <a class="btn btn-info" href="{{route('zam.charts',2)}}">Štatistiky</a>
                <a class="btn btn-info" href="{{ route('zozprofil', 2)}}">Zamestnanecké profily</a>
            </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="nadpis_fakult01">Profil fakulty </h2>
            <pre class="border_text01">
V nadväznosti na takmer päťdesiatročnú tradíciu vzdelávania maďarských pedagógov na Univerzite Konštantína Filozofa v Nitre, resp. i jej predchodkyniach bola na jeseň v roku 2003 založená Fakulta stredoeurópskych štúdií UKF. Vznik fakulty, ktorej štruktúru determinovala nutnosť vyhovieť neustále a rýchlo sa meniacemu spoločenskému prostrediu, bol podmienený úsilím zjednotiť prípravu maďarských pedagógov na univerzite.
<div class="oddelovacia_ciara"><hr/></div>
Úlohou našej fakulty je nielen príprava budúcich pedagógov, ale aj odborníkov, ktorí zvládajú komunikáciu v niekoľkých jazykoch a ktorí sú schopní uplatniť sa v rôznych oblastiach kultúry, verejnej správy a cestovného ruchu. Vďaka významným domácim a zahraničným odborníkom, ktorí na fakulte zabezpečujú výučbu, naši absolventi získavajú diplom uznávaný doma i v zahraničí.
<div class="oddelovacia_ciara"><hr/></div>
Okrem vzdelávania tvorí neoddeliteľnú súčasť aktivít fakulty aj vedecko-výskumná činnosť zodpovedajúca profilu fakulty a výskumnému zameraniu jej jednotlivých pracovísk. Významný podiel tvoria vedecko-výskumné projekty fakulty riešené v spolupráci s domácimi a zahraničnými univerzitami, výskumnými ústavmi, štátnymi a mimovládnymi organizáciami. Výsledky výskumu sú publikované v monografiách, vedeckých a odborných článkoch, v príspevkoch na domácich i medzinárodných konferenciách.
<div class="oddelovacia_ciara"><hr/></div>
Na fakulte majú dlhoročnú tradíciu aj mimokurikulárne a spoločenské aktivity poslucháčov. Spevácky zbor, tanečný súbor, študentský časopis, rôzne pozvané prednášky, autorské večierky a ďalšie podujatia nielen posilňujú vedomie spolupatričnosti, ale tiež rozširujú paletu činnosti poslucháčov vo voľnom čase.

            </pre>
                </div>
            </div>


    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection
