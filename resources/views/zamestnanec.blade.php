@extends('Layouts.master')

@section('stylesheet')
    {!! Html::style('css/select2.min.css') !!}
@endsection

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
                        <a class="logo" href="{{route('ukf')}}" ><img  src="{{URL::to('/')}}/images/logo_ukf.png" alt=""></a>
                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>

                    <h2>Fakulty Univerzity</h2>
                    <div class="row">


                        <div class="col-md-7">
                            <div class="feature rounded-icon">
                                <a href="{{url::to('Zamestnanec/fpv')}}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Prírodných Vied </h3>
                                </a>
                                <p>FPV</p>

                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{URL::to('Zamestnanec/fsvz')}}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Sociálnych Vied a Zdravotníctva </h3>
                                </a>
                                <p>FSVaZ</p>

                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{URL::to('Zamestnanec/fss')}}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Fakulta Stredoeurópskych Štúdií </h3>
                                </a>
                                <p>FSŠ</p>

                            </div>
                        </div>


                        <div class="col-md-5">
                            <div class="feature rounded-icon">
                                <a href="{{URL::to('Zamestnanec/ff')}}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Filozofická Fakulta </h3>
                                </a>
                                <p>FF</p>

                            </div>

                            <div class="feature rounded-icon">
                                <a href="{{URL::to('Zamestnanec/pf')}}">
                                    <div class="feature-icon"><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Pedagogická Fakulta </h3>
                                </a>
                                <p>PF</p>

                            </div>

                            <div class="feature rounded-icon">
                                <a href="#">
                                    <div class="feature-icon" ><i class="icon-owl"></i></div>
                                    <h3 class="feature-title">Ostatné časti </h3>
                                </a>
                                <p>Univerzity</p>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- Vyhladavaci formular -->
                @include('Layouts.zam-search')
            </main>

            <div class="graduates">
                <ul class="slides">

                    <li>
                        @foreach ($zamestnanec as $zam)
                            <div class="student-data">
                                <div class="student-image">
                                    <a href="{{route('iny.profil', $zam['id'])}}"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="25%" width="auto"></a>
                                </div>
                                <div class="student-details">
                                    <a href="{{route('iny.profil', $zam['id'])}}" style="color: inherit;"><h2 class="student-name" >{{ $zam['meno']}}</h2></a>
                                    <ul class="student-info">
                                        <li style="color: inherit;">e-mail: <strong>{{ $zam['email']}}</strong></li>
                                        <li>Rola: <strong>{{ $zam['rola']}}</strong></li>
                                        <li>Katedra: <strong>{{ $zam['katedra']}}</strong></li>
                                        <li>Fakulta: <strong>{{ $zam['fakulta']}}</strong></li>

                                        <li>Tagy: <strong>
                                                <?php $i = 0; ?>
                                                @foreach($tagy as $ta)
                                                    @if((count($ta)!=0)&&($zam['id']== $ta['id']))
                                                        <?php $i = 1; ?>
                                                        <span class="badge badge-primary">{{$ta['name']}}</span>
                                                    @endif
                                                @endforeach
                                                @if($i == 0)
                                                    <span>žiadne</span>
                                                @endif
                                            </strong>
                                        </li>
                                    </ul>
                                    <br>
                                    <p>Profil: <strong>{{ $zam['profil']}} </strong></p>
                                </div>
                            </div>
                        @endforeach
                    </li>

                    <li>
                        @foreach ($zamestnanec01 as $zam)
                            <div class="student-data">
                                <div class="student-image">
                                    <a href="{{route('iny.profil', $zam['id'])}}"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="25%" width="auto"></a>
                                </div>
                                <div class="student-details">
                                    <a href="{{route('iny.profil', $zam['id'])}}" style="color: inherit;"><h2 class="student-name" >{{ $zam['meno']}}</h2></a>
                                    <ul class="student-info">
                                        <li style="color: inherit;">e-mail: <strong>{{ $zam['email']}}</strong></li>
                                        <li>Rola: <strong>{{ $zam['rola']}}</strong></li>
                                        <li>Katedra: <strong>{{ $zam['katedra']}}</strong></li>
                                        <li>Fakulta: <strong>{{ $zam['fakulta']}}</strong></li>

                                        <li>Tagy: <strong>
                                                <?php $i = 0; ?>
                                                @foreach($tagy as $ta)
                                                    @if((count($ta)!=0)&&($zam['id']== $ta['id']))
                                                        <?php $i = 1; ?>
                                                        <span class="badge badge-primary">{{$ta['name']}}</span>
                                                    @endif
                                                @endforeach
                                                @if($i == 0)
                                                    <span>žiadne</span>
                                                @endif
                                            </strong>
                                        </li>
                                    </ul>
                                    <br>
                                    <p>Profil: <strong>{{ $zam['profil']}} </strong></p>
                                </div>
                            </div>
                        @endforeach
                    </li>

                </ul>
            </div>

        </div>

    </div>

        </div>

    </div>

    <script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{URL::to('/')}}/js/plugins.js"></script>
    <script src="{{URL::to('/')}}/js/app.js"></script>
@endsection

@section('script')
    {!! Html::script('js/select2.min.js') !!}
    <script>
        $('.select2-multi').select2();
    </script>
@endsection