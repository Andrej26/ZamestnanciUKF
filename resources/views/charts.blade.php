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

                    <div class="row">

                        <div class="border_links01">

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fpv')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta prírodných vied</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fsvz')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta sociálnych vied a zdravotníctva</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/fss')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Fakulta stredoeurópskych štúdií</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/ff')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Filozofická fakulta</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{URL::to('UKF/pf')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                        <h4 >Pedagogická fakulta</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>

            <h1>Profil</h1>
            <div class="profil">
                <table class="columns">
                    <tr>
                        <td><div id="Data1_chart_div" style="width: 50%; height: 200px;"></div></td>
                        <td><div id="Data2_chart_div" style="width: 50%; height: 200px;"></div></td>
                    </tr>
                    <tr>
                        <td><div id="Data1_chart_div" style="width: 50%; height: 200px;"></div></td>
                        <td><div id="Data2_chart_div" style="width: 50%; height: 200px;"></div></td>
                    </tr>
                </table>
            </div>
            <div class="komentare">
                <h1>Komentáre</h1>
                <textarea class="koment"></textarea>
                <p><input type="button" class="button_k" value="Pridaj Komentar"></p>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{URL::to('/')}}/js/Image-modal.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/js/GCharts.js"></script>

@endsection