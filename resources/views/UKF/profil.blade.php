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
            </main>

            <h1>Profil</h1>
            <div class="profil" style="overflow: hidden; height: auto;">
                @foreach($profils as $prof)
                <ul class="slides02">
                    <li>
                        <div class="student-data">
                            <div class="student-image">
                                <img id="zam-img" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="auto" width="100%">
                                <div id="zamModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </div>
                            <div class="student-details">
                                <h2 class="student-name">{{$prof['mena']}}</h2>
                                <ul class="student-info">
                                    <li>e-mail: <strong><a href="mailto:{{$prof['mail']}}" style="color: inherit;">{{$prof['mail']}}</a></strong></li>
                                    <li>katedra: <strong>{{$prof['katedra1']}}</strong></li>
                                    <li>Rola:
                                        <strong>
                                            @if($prof['rol']==1)
                                                Zamestnanec
                                            @endif
                                            @if($prof['rol']==2)
                                                Navstevnik
                                            @endif
                                            @if($prof['rol']==3)
                                                Administrator
                                             @endif
                                        </strong>
                                    </li>
                                    <li><h2>Popis:</h2>
                                        <p>{{$prof['rola1']}}</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class ="popis">

                        </div>
                        <div class ="popis">
                            <button onclick="publikacieFunc()" class="publ-dropdown">Publikacie</button>
                            <button onclick="projektyFunc()" class="proj-dropdown">Projekty</button>
                            <div id="publDrop" class="publ-dropdown-content">
                            @foreach($publikacia as $publ)
                            <ul class="publikacie-info">
                                <li><strong>Názov: </strong>{{$publ['nazov']}}</li>
                                @if($publ['isbn']!= null)
                                    <li><strong>ISBN: </strong>{{$publ['isbn']}}</li>
                                @endif
                                    <li><strong>Autori: </strong>{{$publ['autori']}}</li>
                                @if($publ['podtitulok']!= null)
                                    <li><strong>Podtitulok: </strong>{{$publ['podtitulok']}}</li>
                                @endif
                                @if($publ['vydavatel']!=null)
                                    <li><strong>Vydavateľ: </strong>{{$publ['vydavatel']}}</li>
                                @endif
                            </ul>
                            @endforeach
                            </div>
                        </div>
                            <div id="projDrop" class="proj-dropdown-content">
                                @foreach($projekt as $proj)
                                    <ul class="projekt-info">
                                        <li><strong>Názov projektu: </strong>{{$proj['nazov']}}</li>
                                        <li><strong>Od: </strong>{{$proj['zaciatok']}} - <strong>do: </strong>{{$proj['koniec']}}</li>
                                        <li><strong>Registračné číslo: </strong> {{$proj['reg']}}</li>
                                    </ul>
                                @endforeach
                            </div>
                    </li>
                </ul>
                @endforeach
            </div>
            <!-- pridavanie kOmentarov -->
            <div class="komentare">
                <h1>Komentáre</h1>

                {!! Form::open(array('route' => 'komentar.store','method'=>'POST')) !!}
                @include('Admin_DBtables.Komentare.createform')
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    {!! Form::submit('Odoslať komentár',['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>
    <script type="text/javascript" src="{{URL::to('/')}}/js/Image-modal.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/js/dropdownScript.js"></script>
@endsection