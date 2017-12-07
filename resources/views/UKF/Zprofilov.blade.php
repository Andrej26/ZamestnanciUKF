@extends('Layouts.master')

@section('stylesheet')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('header')
    @include('Layouts.Navigacia.navbar')
@endsection

@section('content')
    @include('Layouts.alerts')

    <div class="site-content">
        <div class="container">
            <main class="main-content">
                <div class="content">
                    <header class="site-header">
                        <a href="{{route('ukf')}}" class="logo"><img src="{{URL::to('/')}}/images/logo_ukf.png" alt=""></a>

                    </header> <!-- .site-header -->

                    <div class="banner">
                        <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                    </div>
                </div>

                @include('Layouts.search')

            </main>

            @if($ifakulta == 0)
                <h1>Zoznam Profilov zamestnancov univerzity</h1>
            @endif

            @if($ifakulta == 1)
                <h1>Zoznam Profilov zamestnancov Filozofickej Fakulty</h1>
            @endif
            @if($ifakulta == 3)
                <h1>Zoznam Profilov zamestnancov Pedagogickej Fakulty</h1>
            @endif
            @if($ifakulta == 2)
                <h1>Zoznam Profilov zamestnancov Fakulty stredoeuropskych studii</h1>
            @endif
            @if($ifakulta == 4)
                <h1>Zoznam Profilov zamestnancov Fakulty Prirodnych vied</h1>
            @endif
            @if($ifakulta == 5)
                <h1>Zoznam Profilov zamestnancov Fakulta socialnych vied a zdravotnictva</h1>
            @endif
            @if($ifakulta == 6)
                <h1>Zoznam Profilov zamestnancov ostatných častí univerzity</h1>
            @endif

            <div class="profil">
            @if($test === 1)
                @foreach ($zamestnanec as $zam)
                        <ul class="slides">
                            <li>
                            <div class="student-data">
                                <div class="student-image">
                                    <a href="{{route('profil', $zam['id'])}}"><img id="student-image" src="{{URL::to("/")}}/dummy/person-1@2x.jpg" alt="Profilova Fotografia" height="25%" width="auto"></a>
                                </div>
                                <div class="student-details">
                                    <a href="{{route('profil', $zam['id'])}}" style="color: inherit;"><h2 class="student-name" >{{ $zam['meno']}}</h2></a>
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
                            </li>
                        </ul>
                @endforeach
                @endif
                @if($test === 0)
                    <p>Nenašli sa žiadni zamestnanci, ktorý by obsahovali informácie podľa zadaných parametrov.</p>
                @endif
            </div>
        </div>
    </div>

    <script src="{{URL::to('/')}}/js/Image-modal.js"></script>

@endsection

@section('script')
    {!! Html::script('js/select2.min.js') !!}
    <script>
        $('.select2-multi').select2();
    </script>

    <script type="text/javascript">
        $(document).ready(function () {

            $(document).on('change','.fakultaa', function () {
                //console.log("juchuuu som tu");

                var cat_id=$(this).val();
                //console.log(cat_id);
                //var div=$(this).parent();

                var op=" ";

                $.ajax({
                    type:'get',
                    url:'{!! route('findKatedry') !!}',
                    data:{'id':cat_id},
                    success:function(data){
                        //console.log('succes');
                        // console.log(data);
                        $('select[class="kated"]').empty();

                        op+='<option value="0" selected disabled>...</option>';
                        for(var i=0; i<data.length;i++){
                            op+='<option value="'+data[i].idKatedra+'">'+data[i].nazov+'</option>';
                        }
                        // console.log(div.find('.kated').append(op));

                        $('select[class="kated"]').append(op);
                    },
                    error:function () {

                    }
                });
            });
        });
    </script>

@endsection