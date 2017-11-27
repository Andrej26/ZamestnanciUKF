@extends('Layouts.master')

@section('header')
    @include('Layouts.Navigacia.navbar')
@endsection

@section('content')
    <!-- Toto vypisuje hlasku, ked je zablokovaný prístup k zamestancovmu kontu -->
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger" style="text-align: center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: red">
                <span aria-hidden="true" >&times;</span>
            </button>
            <p class="message">{{ $message }}</p>
        </div>
    @endif

    <!-- Toto vypisuje hlasku, ked je niečo dobre alebo sa zamestnanec odhlási. -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="text-align: center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: red">
                <span aria-hidden="true" >&times;</span>
            </button>
            <p class="message">{{ $message }}</p>
        </div>
    @endif

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
                            <a href="{{url::to('UKF/fpv')}}">
                                <div class="feature-icon"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Fakulta Prírodných Vied </h3>
                            </a>
                            <p>FPV</p>

                        </div>

                        <div class="feature rounded-icon">
                            <a href="{{URL::to('UKF/fsvz')}}">
                                <div class="feature-icon"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Fakulta Sociálnych Vied a Zdravotníctva </h3>
                            </a>
                            <p>FSVaZ</p>

                        </div>

                        <div class="feature rounded-icon">
                            <a href="{{URL::to('UKF/fss')}}">
                                <div class="feature-icon"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Fakulta Stredoeurópskych Štúdií </h3>
                            </a>
                            <p>FSŠ</p>

                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="feature rounded-icon">
                            <a href="{{URL::to('UKF/ff')}}">
                                <div class="feature-icon"><i class="icon-owl"></i></div>
                                <h3 class="feature-title">Filozofická Fakulta </h3>
                            </a>
                            <p>FF</p>

                        </div>

                        <div class="feature rounded-icon">
                            <a href="{{URL::to('UKF/pf')}}">
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
            @include('Layouts.search')
        </main>

        <div class="graduates">
            <ul class="slides">
                <li>
                    <div class="student-data">
                        <div class="student-image">
                            <img src="{{URL::to('/')}}/public/dummy/person-1.jpg" alt="">
                        </div>
                        <div class="student-details">
                            <h2 class="student-name">Howard Brown</h2>
                            <ul class="student-info">
                                <li>Graduation: <strong>2011</strong></li>
                                <li>Course: <strong>Management</strong></li>
                                <li>Current job: <strong>Micro System INC.</strong></li>
                            </ul>

                            <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="student-data">
                        <div class="student-image">
                            <img src="{{URL::to('/')}}/dummy/person-1.jpg" alt="">
                        </div>
                        <div class="student-details">
                            <h2 class="student-name">Howard Brown</h2>
                            <ul class="student-info">
                                <li>Graduation: <strong>2011</strong></li>
                                <li>Course: <strong>Management</strong></li>
                                <li>Current job: <strong>Micro System INC.</strong></li>
                            </ul>

                            <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
                        </div>

                    </div>
                </li>
            </ul>
        </div>

    </div>

</div>

<script src="{{URL::to('/')}}/js/jquery-1.11.1.min.js"></script>
<script src="{{URL::to('/')}}/js/plugins.js"></script>
<script src="{{URL::to('/')}}/js/app.js"></script>


@endsection