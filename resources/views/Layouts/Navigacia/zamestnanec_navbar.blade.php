<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a454b; border-radius: 0px 0px 6px 6px">
    <a class="navbar-brand" href="{{route('zames.dashboard')}}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto">
                <li>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Hľadať" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                <!--  <span class="fa fa-search" aria-hidden="true"></span>   -->
                Vyhľadať
            </button>
        </form>
                </li>
        <li class="nav-item dropdown dropdown-menu-left">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fakulty
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="row" style="padding: 0px 15px 0px 15px; min-width: 300px;">
                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                        <div class="row" >
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
            </div>
        </li>

        <div style='float: right; margin-l: auto;'>

        </div>

        <div style='float: right; margin-left: auto;'>
            <a class="btn btn-dark float-right" href="{{ route('zames.logout') }}">Odhasit</a>
            &nbsp; &nbsp;
            <a class="btn btn-success float-left" href="{{ route('zames.profil') }}">Profil</a>
        </div>
    </div>
</nav>