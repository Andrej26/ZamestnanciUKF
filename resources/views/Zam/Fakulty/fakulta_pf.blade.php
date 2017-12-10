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

                            <h2 class="nadpis_fakult">Pedagogická fakulta</h2>

                        </div>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>


                </div>


            </main>


            <div class="col-md-10">
                <a class="btn btn-info" href="{{route('zam.charts',3)}}">Štatistiky</a>
                <a class="btn btn-info" href="{{ route('zozprofil', 3)}}">Zamestnanecké profily</a>
            </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="nadpis_fakult01">Profil fakulty </h2>
            <pre class="border_text01">
Jednu z najvýznamnejších a počtom najväčších skupín vysokoškolsky vzdelaných odborníkov v našej spoločnosti predstavujú učitelia. Kvalita ich práce - výchovy a vzdelávania dorastajúcich generácií sa sprostredkovane prenáša do celého systému života spoločnosti. Zabezpečenie vysokoškolského vzdelávania aj učiteľov pôsobiacich na základných školách bolo riešené vo vládnom nariadení č. 57/1959 Zb. Toto nariadenie sa stalo určujúcim pre vznik Pedagogického inštitútu v Nitre, z ktorého sa o 37 rokov neskôr vytvorila dnešná Univerzita Konštantína Filozofa. Inštitucionálny vývoj pôvodného Pedagogického inštitútu a s ním spojené štrukturálne a obsahovo - organizačné zmeny vždy úzko súviseli predovšetkým s rozvojom vzdelávacej sústavy a v rámci nej realizovanými reformami.
<div class="oddelovacia_ciara"><hr/></div>
Pedagogická fakulta Univerzity Konštantína Filozofa v Nitre i naďalej reaguje na spoločenské potreby a nové trendy, ktoré sa objavujú v školskom systéme, a podľa toho smeruje svoje rozvojové aktivity. Poskytovanie odborného vzdelania budúcim učiteľom materských, základných a stredných škôl ostáva hlavným poslaním činnosti Pedagogickej fakulty UKF. Pripravuje však aj kvalifikovaných vychovávateľov, sociálnych pedagógov a andragógov pre výchovnú prácu v školských, mimoškolských, podnikových a iných výchovných zariadeniach, školských manažérov, majstrov odbornej výchovy a učiteľov technickej výchovy. Fakulta sa aktívne spolupodieľa aj na zabezpečovaní potrieb seniorov v rámci Univerzity tretieho veku UKF. Systém vzdelávania na Pedagogickej fakulte nikdy nebol statickým. Je to systém dynamický, pre ktorý je charakteristické neustále hľadanie optimálnych ciest ako pripraviť budúcich absolventov tak, aby dokázali úspešne a tvorivo riešiť úlohy, s ktorými budú konfrontovaní vo svojej každodennej praxi.
            </pre>
                </div>

        </div>

    </div>




    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>


@endsection

