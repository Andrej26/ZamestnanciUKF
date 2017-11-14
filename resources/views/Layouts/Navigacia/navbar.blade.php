<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #288bd7">
    <a class="navbar-brand" href="{{route('ukf')}}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Another info</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                <!--  <span class="fa fa-search" aria-hidden="true"></span>   -->
                Search
            </button>
        </form>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prihlásenie
                </a>
                <ul class="dropdown-menu dropdown-menu-right" style="padding: 15px; min-width: 250px;">
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

                                   <!-- <div class="form-group">
                                        <label class="heslo01" for="exampleInputPassword2">Heslo:</label>
                                        <input type="password" class="form-control" id="heslo" placeholder="Heslo" required>
                                    </div> -->

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                            Zapamätaj si ma
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Prihlásiť</button>
                                    </div>

                                    <a class="btn btn-link" href="{{route('ukf')}}">
                                        Zabudli ste heslo? (nefunguje ešte)
                                    </a>

                                </form>

                            </div>
                        </div>
                    </li>
                    <!--   <li class="dropdown-divider"></li>
                     <a class="dropdown-item" href="#">New around here? Sign up</a> -->
                    <!--    <a class="dropdown-item" href="#">Zabudli ste heslo?</a>
                     <!--     <li class="divider"></li>
                           <li>
                               <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                               <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                           </li>
                       -->
                </ul>
            </li>
        </ul>
    </div>
</nav>
