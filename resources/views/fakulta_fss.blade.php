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
                            <h2>Fakulta stredoeurópskych štúdií</h2>

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
V nadväznosti na takmer päťdesiatročnú tradíciu vzdelávania maďarských pedagógov na Univerzite Konštantína Filozofa v Nitre, resp. i jej predchodkyniach bola na jeseň v roku 2003 založená Fakulta stredoeurópskych štúdií UKF. Vznik fakulty, ktorej štruktúru determinovala nutnosť vyhovieť neustále a rýchlo sa meniacemu spoločenskému prostrediu, bol podmienený úsilím zjednotiť prípravu maďarských pedagógov na univerzite.

Úlohou našej fakulty je nielen príprava budúcich pedagógov, ale aj odborníkov, ktorí zvládajú komunikáciu v niekoľkých jazykoch a ktorí sú schopní uplatniť sa v rôznych oblastiach kultúry, verejnej správy a cestovného ruchu. Vďaka významným domácim a zahraničným odborníkom, ktorí na fakulte zabezpečujú výučbu, naši absolventi získavajú diplom uznávaný doma i v zahraničí.

Okrem vzdelávania tvorí neoddeliteľnú súčasť aktivít fakulty aj vedecko-výskumná činnosť zodpovedajúca profilu fakulty a výskumnému zameraniu jej jednotlivých pracovísk. Významný podiel tvoria vedecko-výskumné projekty fakulty riešené v spolupráci s domácimi a zahraničnými univerzitami, výskumnými ústavmi, štátnymi a mimovládnymi organizáciami. Výsledky výskumu sú publikované v monografiách, vedeckých a odborných článkoch, v príspevkoch na domácich i medzinárodných konferenciách.

Na fakulte majú dlhoročnú tradíciu aj mimokurikulárne a spoločenské aktivity poslucháčov. Spevácky zbor, tanečný súbor, študentský časopis, rôzne pozvané prednášky, autorské večierky a ďalšie podujatia nielen posilňujú vedomie spolupatričnosti, ale tiež rozširujú paletu činnosti poslucháčov vo voľnom čase.

            </pre>
                </div>
            </div>



        </div>

    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection
