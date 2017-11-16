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
                        <h1 class="nadpis">Univerzita Konštantína Filozofa v Nitre</h1>

                    </div>
                </header> <!-- .site-header -->

                <div class="banner">
                    <img src="{{URL::to('/')}}/dummy/banner.jpg" alt="Banner">
                </div>

                <h2>Fakulty: </h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="feature rounded-icon">
                            <a href="#"> <div class="feature-icon"><i class="icon-owl"></i></div>
                            <h3 class="feature-title">Fakulta prírodných vied </h3> </a>
                            <p>Fakulta prírodných vied</p>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">

                        <div class="feature rounded-icon">
                            <a href="#"><div class="feature-icon"><i class="icon-bus"></i></div>
                                <h3 class="feature-title">Fakulta sociálnych vied a zdravotníctva </h3> </a>
                            <p>Fakulta sociálnych vied a zdravotníctva</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature rounded-icon">
                            <a href="#"> <div class="feature-icon"><i class="icon-school"></i></div>
                                <h3 class="feature-title">Fakulta stredoeurópskych študií</h3> </a>
                            <p>Fakulta stredoeurópskych študií</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="feature rounded-icon">
                            <a href="#"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h3 class="feature-title">Filozofická fakulta </h3> </a>
                            <p>Filozofická fakulta</p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="feature rounded-icon">
                            <a href="#"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                <h3 class="feature-title">Pedagogická fakulta </h3> </a>
                            <p>Pedagogická fakulta</p>
                        </div>

                    </div>
                </div>


            </div>
            <div class="aside">
                <form action="#" class="signup-form">
                    <div class="form-header">
                        <h2>Vyhľadávanie zamestnancov univerzity</h2>
                    </div>
                    <div class="form-content">
                        <p><input type="text" placeholder="Meno"></p>
                        <p><input type="text" placeholder="Priezvisko"></p>
                        <p><input type="text" placeholder="Fakulta"></p>
                        <p><input type="text" placeholder="Katedra"></p>


                        <div class="form-group">
                           <!-- <label for="sel1">Titul:</label> -->
                            <select class="form-control" id="sel1">
                                <option>Titul</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <p>
                            <input type="submit" value="Vyhľadať">
                        </p>
                        <p class="info">Vyhľadanie zamestnanca na základe vyplnených políčok</p>
                    </div>
                </form>
            </div>
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