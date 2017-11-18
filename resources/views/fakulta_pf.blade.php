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
                            <h2>Pedagogická fakulta</h2>

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
Jednu z najvýznamnejších a počtom najväčších skupín vysokoškolsky vzdelaných odborníkov v našej spoločnosti predstavujú učitelia. Kvalita ich práce - výchovy a vzdelávania dorastajúcich generácií sa sprostredkovane prenáša do celého systému života spoločnosti. Zabezpečenie vysokoškolského vzdelávania aj učiteľov pôsobiacich na základných školách bolo riešené vo vládnom nariadení č. 57/1959 Zb. Toto nariadenie sa stalo určujúcim pre vznik Pedagogického inštitútu v Nitre, z ktorého sa o 37 rokov neskôr vytvorila dnešná Univerzita Konštantína Filozofa. Inštitucionálny vývoj pôvodného Pedagogického inštitútu a s ním spojené štrukturálne a obsahovo - organizačné zmeny vždy úzko súviseli predovšetkým s rozvojom vzdelávacej sústavy a v rámci nej realizovanými reformami.

Pedagogická fakulta Univerzity Konštantína Filozofa v Nitre i naďalej reaguje na spoločenské potreby a nové trendy, ktoré sa objavujú v školskom systéme, a podľa toho smeruje svoje rozvojové aktivity. Poskytovanie odborného vzdelania budúcim učiteľom materských, základných a stredných škôl ostáva hlavným poslaním činnosti Pedagogickej fakulty UKF. Pripravuje však aj kvalifikovaných vychovávateľov, sociálnych pedagógov a andragógov pre výchovnú prácu v školských, mimoškolských, podnikových a iných výchovných zariadeniach, školských manažérov, majstrov odbornej výchovy a učiteľov technickej výchovy. Fakulta sa aktívne spolupodieľa aj na zabezpečovaní potrieb seniorov v rámci Univerzity tretieho veku UKF. Systém vzdelávania na Pedagogickej fakulte nikdy nebol statickým. Je to systém dynamický, pre ktorý je charakteristické neustále hľadanie optimálnych ciest ako pripraviť budúcich absolventov tak, aby dokázali úspešne a tvorivo riešiť úlohy, s ktorými budú konfrontovaní vo svojej každodennej praxi.

            </pre>
                </div>
            </div>



        </div>

    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection

