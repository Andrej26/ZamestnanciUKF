<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a454b; border-radius: 0px 0px 6px 6px">
    <a class="navbar-brand" href="{{route('zames.dashboard')}}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">


        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Hľadať" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                <!--  <span class="fa fa-search" aria-hidden="true"></span>   -->
                Vyhľadať
            </button>
        </form>

        <div style='float: right; margin-l: auto;'>

        </div>

        <div style='float: right; margin-left: auto;'>
            <a class="btn btn-dark float-right" href="{{ route('zames.logout') }}">Odhasit</a>
            &nbsp; &nbsp;
            <a class="btn btn-success float-left" href="{{ route('zames.profil') }}">Profil</a>
        </div>
    </div>
</nav>