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

                                <img src="{{URL::to('/')}}/{{ \App\Http\Controllers\UploadController::VratObrazokZamestnanca($prof['id'])}}" alt="">


                                <div id="zamModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </div>
                            <div class="student-details">

                                <!-- matusov kod na editaciu zamestnanca -->
                                @if($prof['id'] != null && $prof['id'] > 0)
                                    <a class="button_k" href="{{route('TabZamestnanci.uprav', Auth::id())}}">Uprav svoj profil</a>

                                    <h1>Upload fotky</h1>
                                    <form action="{{ URL::to('upload', $prof['id']) }}" method="post" enctype="multipart/form-data">
                                        <label>Select image to upload:</label>
                                        <input type="file" name="file" id="file">
                                        <input type="submit" value="Upload" name="submit">
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    </form>

                                @endif

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
                                    <li>Tagy: <strong>
                                            <?php $i = 0; ?>
                                            @foreach($tagy as $ta)
                                                @if((count($ta)!=0)&&($prof['id']== $ta['id']))
                                                    <?php $i = 1; ?>
                                                    <span class="badge badge-primary">{{$ta['name']}}</span>
                                                @endif
                                            @endforeach
                                            @if($i == 0)
                                                <span>žiadne</span>
                                            @endif
                                        </strong>
                                    </li>
                                    <br/>
                                    <li><p>Profil: <strong>{{ $prof['rola1']}} </strong></p></li>
                                </ul>
                            </div>
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

            </div>

            <!-- Vypis komentarov -->
            <h1>Komentáre</h1>
            <div class="komentar" >
                <?php $i = 1; ?>
                @foreach ($komentare as $kom)
                    <div class="komentare">
                        <div class="autor" >
                            <a href="{{route('iny.profil', $kom->idzamestnanec)}}"><img id="zam-img" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="auto" width="100%" style="border-radius: 50%    "></a>
                        </div>
                        <div class="koment" style="border: none; background-color: inherit">
                            <div class="student-details">
                                <ul class="student-info">
                                    <li><a href="{{route('iny.profil', $kom->idzamestnanec)}}"><strong>{{ $kom->meno}}</strong></a></li>
                                    <li>{{$kom['komentar']}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="koment01" style="border: none; background-color: inherit">
                            <strong style="font-size: 18px;">#{{$i}}</strong>
                            <?php $i++; ?>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class='col-xs-12 col-sm-12 col-md-12'>
                {{ $komentare->links('vendor.pagination.bootstrap-4') }}
            </div>

            <!-- pridavanie kOmentarov -->
            <div class="komentare">
                <h1>Komentáre</h1>
                {!! Form::model($prof, ['method' => 'POST','route' => ['komentar.store', $prof['id']]]) !!}
                @include('Zam.Pridavanie_komentarov.createform')
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    {!! Form::submit('Odoslať komentár',['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            @endforeach
        </div>
    </div>
    <script type="text/javascript" src="{{URL::to('/')}}/js/Image-modal.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/js/dropdownScript.js"></script>
@endsection