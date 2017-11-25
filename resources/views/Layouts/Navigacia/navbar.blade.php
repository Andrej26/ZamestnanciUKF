<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a454b; border-radius: 0px 0px 6px 6px">
    <a class="navbar-brand" href="{{route('ukf')}}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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
            <li class="nav-item dropdown dropdown-menu-left" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fakulty
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #2a2a2a; box-shadow: 0px 0px 5px #2a2a2a;">
                    <div class="row" style="padding: 0px 15px 0px 15px; min-width: 300px;">
                    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                        <div class="row"  >
                            <div class="col-md-10">
                                <a href="{{URL::to('UKF/fpv')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 style="color: white;">Fakulta prírodných vied</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <a href="{{URL::to('UKF/fsvz')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 style="color: white;">Fakulta sociálnych vied a zdravotníctva</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <a href="{{URL::to('UKF/fss')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 style="color: white;">Fakulta stredoeurópskych štúdií</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <a href="{{URL::to('UKF/ff')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 style="color: white;">Filozofická fakulta</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <a href="{{URL::to('UKF/pf')}}"> <div class="feature-icon"><i class="icon-foot-ball"></i></div>
                                    <h4 style="color: white;">Pedagogická fakulta</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn-outline-dark btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prihlásenie
                </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="padding: 15px; min-width: 250px;box-shadow: 0px 0px 10px 2px #3a3a3a">
                    <li>
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                <form class="form" role="form" method="POST" action="{{ route('zames.login') }}" accept-charset="UTF-8" id="login-nav">
                                    {{ csrf_field() }}

                                    <div class="form-group{{$errors->has('email')?'has-error' : ''}}">
                                        <label class="email01" for="email">Email adresa:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email adresa" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                             </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{$errors->has('password')?'has-error' : ''}}">
                                        <label class="email01" for="password">Heslo:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Heslo" name="heslo" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                             </span>
                                        @endif
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                            Zapamätaj si ma
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Prihlásiť</button>
                                    </div>
                                    <a class="btn btn-link" href="{{ route('zame.password.request')}}">
                                        Zabudli ste heslo? (nefunguje ešte)
                                    </a>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
